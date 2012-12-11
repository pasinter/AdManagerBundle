<?php

namespace Pasinter\AdManagerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CampaignAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('code')
            ->add('description')
            ->add('adsCount')
                
            // add custom action links
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                )
            ))
        ;
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('code', null, array('required' => true))
                ->add('description', null, array('required' => false))
            ->end()
                
            
            ->with('Ads')
                ->add('ads', 'sonata_type_collection', array('label' => ' ', 'by_reference' => false, 'required' => false),  array(
                        // http://stackoverflow.com/questions/11501022/sonata-admin-bundle-form-type-sonata-type-collection-custom-template
                        'edit' => 'inline',
                        'inline' => 'table',
                        'link_parameters' => array('context' => 'default'),
                        ))
            ->end()
             
        ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('code')
            ->add('description')
        ;
    }
  
}