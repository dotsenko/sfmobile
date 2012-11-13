<?php

namespace Mobile\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ShareController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MobileFrontendBundle:Share:index.html.twig');
    }
}
