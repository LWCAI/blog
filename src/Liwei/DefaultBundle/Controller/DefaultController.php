<?php

namespace Liwei\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
     
    public function indexAction()
    {
        
        $name = "Blog";
        return $this->render('LiweiDefaultBundle:Default:index.html.twig', array('name' => $name));
    }
}
