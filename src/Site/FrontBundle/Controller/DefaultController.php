<?php

namespace Site\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "test";
        return $this->render('SiteFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
