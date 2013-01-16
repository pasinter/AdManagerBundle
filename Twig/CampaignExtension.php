<?php

namespace Pasinter\AdManagerBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerAwareInterface,
    Symfony\Component\DependencyInjection\ContainerInterface;


class CampaignExtension extends \Twig_Extension implements ContainerAwareInterface
{

    /**
     *
     * @var ContainerInterface
     */
    protected $container;
    
    /**
     *
     * @param ContainerInterface $container 
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
        
        return $this;
    }
    
    public function getFunctions()
    {
        return array(
            'admanager_campaign_get' => new \Twig_Function_Method($this, 'get'),
            'admanager_campaign_render' => new \Twig_Function_Method($this, 'render', array('is_safe' => array('html'))),
        );
    }

    
    /**
     *
     * @param string $code
     * @param array $path
     * @param array $options
     * @return type 
     */
    public function get($code, array $options = array())
    {
        $em = $this->container->get('doctrine')->getEntityManager(); 
        
        $qb = $em->getRepository('PasinterAdManagerBundle:Campaign')->createQueryBuilder('c');
        
        $qb
            ->select('c')
            ->innerJoin('c.ads', 'a')
            ->andWhere('c.code = :code')
            ->setParameter('code', $code)
        ;
        
        try {
            $campaign = $qb->getQuery()->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
        
        return $campaign;
    }


    public function render($code, array $options = array(), $renderer = null)
    {
        $campaign = $this->get($code, $options);

        if($campaign) {
            $html = '<div id="carousel" style="width:710px; height: 270px;overflow: hidden;">';
            //return $campaign->getContent();
            
            foreach($campaign->getAds() as $ad) {
                $media = $ad->getImage();
                
                $mediaservice = $this->container->get('sonata.media.pool');
                $provider = $mediaservice->getProvider($media->getProviderName());
                $format = $provider->getFormatName($media, 'big');
                
                
                $html .= '<div class="slide">';
                $html .= '<a href="' . $ad->getLink() . '">';
                $html .= '<img src="' . $provider->generatePublicUrl($media, $format) .  '" width="710" height="270">';
                $html .= '</a>';
                $html .= '</div>';
            }
            
            $html .= '</div>';
            
            return $html;
        }
        
        return '';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admanager_campaign';
    }
}
