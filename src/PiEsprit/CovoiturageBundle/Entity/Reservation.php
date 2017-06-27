<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 07/02/2017
 * Time: 23:06
 */
namespace PiEsprit\CovoiturageBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 *
 */
class Reservation
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    public $id;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    public $nbplaces;
    /**
     * @ORM\Column(type="float")
     */
    public $prix;
    /**
     * @ORM\Column(type="boolean")
     */
    public $confirme=false;
    /**
     * @ORM\Column(type="boolean")
     */
    public $decline=false;
    /**
     * @ORM\Column(type="string",length=225, nullable=true)
     */
    public $description;





    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    public $datereservation;
    /**
     * @ORM\ManyToOne(targetEntity="PiEsprit\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="userid", referencedColumnName="id")
     */
    public $userid;
    /**
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumn(name="annonceid", referencedColumnName="id", onDelete="CASCADE")
     */
    public $annonceid;



    public function __construct()
    {
        $this->datereservation = new \DateTime("now");
    }

    /**
     * @return mixed
     */
    public function getNbplaces()
    {
        return $this->nbplaces;
    }

    /**
     * @param mixed $nbplaces
     */
    public function setNbplaces($nbplaces)
    {
        $this->nbplaces = $nbplaces;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getConfirme()
    {
        return $this->confirme;
    }

    /**
     * @param mixed $confirme
     */
    public function setConfirme($confirme)
    {
        $this->confirme = $confirme;
    }


    /**
     * @return mixed
     */
    public function getDatereservation()
    {
        return $this->datereservation;
    }

    /**
     * @param mixed $datereservation
     */
    public function setDatereservation($datereservation)
    {
        $this->datereservation = $datereservation;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getCovannonceid()
    {
        return $this->covannonceid;
    }

    /**
     * @param mixed $covannonceid
     */
    public function setCovannonceid($covannonceid)
    {
        $this->covannonceid = $covannonceid;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDecline()
    {
        return $this->decline;
    }

    /**
     * @param mixed $decline
     */
    public function setDecline($decline)
    {
        $this->decline = $decline;
    }


}