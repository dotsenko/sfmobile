<?php

namespace Mobile\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FooterController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MobileFrontendBundle:Footer:index.html.twig');
    }
}
