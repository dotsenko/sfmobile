<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dotsenko
 * Date: 11/14/12
 * Time: 12:44 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Mobile\FrontendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Mobile\FrontendBundle\Entity\gallery;

class GalleryAdmin extends Admin
{
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'id'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('img')
            ->add('author')
            ->add('date')
            ->add('imgmin')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('img')
            ->add('author')
            ->add('date')
            ->add('imgmin')

        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('img')
            ->add('author')
            ->add('date')
            ->add('imgmin')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            )
        )
        ;
    }

    protected function configureShowField(ShowMapper $showMapper)
    {
         $showMapper
             ->add('title')
             ->add('img')
             ->add('author')
             ->add('date')
             ->add('imgmin')
         ;
    }
}