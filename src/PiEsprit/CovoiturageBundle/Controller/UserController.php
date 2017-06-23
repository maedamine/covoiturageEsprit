<?php

namespace PiEsprit\CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function accueilAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:index.html.twig');
    }

    public function homeAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:home.html.twig');
    }

    public function trajetsAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:Trajets.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:About.html.twig');
    }

    public function contactAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:Contact.html.twig');
    }

    public function faqAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:FAQ.html.twig');
    }

    public function promosAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:Promos.html.twig');
    }



    public function profilAction()
    {
        return $this->render('PiEspritCovoiturageBundle:Covoiturage:profil.html.twig');
    }


}
