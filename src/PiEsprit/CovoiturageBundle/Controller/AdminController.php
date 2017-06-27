<?php

namespace PiEsprit\CovoiturageBundle\Controller;

use Composer\DependencyResolver\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function accueilAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Admin:Layout.html.twig');
    }

    public function listAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Admin:ListQuiz.html.twig');
    }

}