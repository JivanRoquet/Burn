<?php

namespace JRO\Bundle\BurnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JROBurnBundle:Default:index.html.twig', array('name' => $name));
    }
}
