<?php

namespace PiEsprit\MessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PiEspritMessageBundle:Default:index.html.twig');
    }
}
