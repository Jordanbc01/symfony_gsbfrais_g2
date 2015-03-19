<?php

namespace G2\GsbFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('G2GsbFraisBundle:Default:index.html.twig', array('name' => $name));
    }
}
