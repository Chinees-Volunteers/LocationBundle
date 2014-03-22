<?php

namespace CVGY\LocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CVGYLocationBundle:Default:index.html.twig', array('name' => $name));
    }
}
