<?php

namespace Pasinter\AdManagerBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper as TemplatingHelper;

class CarouselHelper extends TemplatingHelper
{

    /**
     * Retrieves an item following a path in the tree.
     *
     * @param \Knp\Menu\ItemInterface|string $menu
     * @param array $path
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function get($menu, array $path = array(), array $options = array())
    {
        return $this->helper->get($menu, $path, $options);
    }

    /**
     * Renders a menu with the specified renderer.
     *
     * @param \Knp\Menu\ItemInterface|string|array $menu
     * @param array $options
     * @param string $renderer
     * @return string
     */
    public function render($menu, array $options = array(), $renderer = null)
    {
        return $this->helper->render($menu, $options, $renderer);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admanager_carousel';
    }
}
