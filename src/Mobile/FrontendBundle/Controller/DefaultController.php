<?php

namespace Mobile\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('MobileFrontendBundle:menu');

        $query = $repository->createQueryBuilder('m')
            ->orderBy('m.order','ASC')
            ->getQuery();

        $menu = $query->getResult();

        return $this->render('MobileFrontendBundle:Default:index.html.twig',array(
            'menu' => $menu,
        ));
    }
}
