<?php

namespace PiEsprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PiEspritUserBundle:Default:index.html.twig');
    }
}
