<?php

namespace Mobile\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AboutController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MobileFrontendBundle:About:index.html.twig');
    }
}
