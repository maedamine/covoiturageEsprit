<?php

namespace PiEsprit\CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Default:index.html.twig');
    }
}
