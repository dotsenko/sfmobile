<?php

namespace Mobile\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GalleryController extends Controller
{
    
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('MobileFrontendBundle:gallery');

        $query = $repository->createQueryBuilder('g')
            ->getQuery();

        $gallery = $query->getResult();

        return $this->render('MobileFrontendBundle:Gallery:index.html.twig',array(
            'gallery' => $gallery,
        ));
    }
}
