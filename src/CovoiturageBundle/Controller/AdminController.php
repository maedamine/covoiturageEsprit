<?php

namespace CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function accueilAction()
    {
        return $this->render('CovoiturageBundle:Admin:Layout.html.twig');
    }
}
