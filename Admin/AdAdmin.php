<?php

namespace Pasinter\AdManagerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class AdAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('link')
            ->add('title')
            ->add('newWindow')
            ->add('position')
            ->add('campaign')
            ->add('image')
                
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
                ->add('link', null, array('required' => true))
                ->add('title', null, array('required' => false))
                ->add('position', null, array('required' => true, 'attr' => array('class' => 'span1')))
            ->end()
                
            
            ->with('Image')
                ->add('image', 'sonata_type_model_list', array(), array('link_parameters' => array('context' => 'admanager')))
            ->end()
        ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('title')
            ->add('campaign')
        ;
    }
  
}