<?php


namespace PiEsprit\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="CovoiturageBundle\AnnonceRepository")
 */

class Annonce
{

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     */
    public $id;

    /**
     *
     * @ORM\Column(name="depart",type="string",length=255)
     */
    public $depart;




    /**
     *
     * @ORM\Column(name="arrivee",type="string",length=255)
     */
    public $arrivee;

    /**
     * @ORM\Column(name="heuredepart",type="string",length=255,nullable=true)
     */
    public $heuredepart;
    /**
     * @ORM\Column(name="date",type="date",nullable=true)
     */
    public $date;

    /**
     * @ORM\Column(name="nbplace",type="integer",nullable=true)
     */
    public $nbplaces;
    /**
     * @ORM\Column(name="prix",type="float",nullable=true)
     */
    public $prix;
    /**
     * @ORM\Column(name="disponible",type="boolean",nullable=true)
     */
    public $disponible=true;






    /**
     * @return notification
     */
    public function getBagages()
    {
        return $this->bagages;
    }

    /**
     * @param notification $bagages
     */
    public function setBagages($bagages)
    {
        $this->bagages = $bagages;
    }

    /**
     * @var
     * @ORM\Column(name="bagages", type="boolean", nullable=true, options={"default":false})
     */
    public $bagages;

    /**
     * @return
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param  $animal
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }

    /**
     * @var
     * @ORM\Column(name="animal", type="boolean", nullable=true, options={"default":false})
     */
    public $animal;

    /**
     * @var
     * @ORM\Column(name="fumer", type="boolean", nullable=true, options={"default":false})
     */
    public $fumer;


    /**
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumn(name="voitureid", referencedColumnName="id", onDelete="SET NULL")
     */
    public $voitureid;

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
     * @ORM\ManyToOne(targetEntity="PiEsprit\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="userid", referencedColumnName="id")
     */
    public $userid;

    /**
     * @return mixed
     */
    public function getVoitureid()
    {
        return $this->voitureid;
    }

    /**
     * @param mixed $voitureid
     */
    public function setVoitureid($voitureid)
    {
        $this->voitureid = $voitureid;
    }




    /**
     * @return mixed
     */
    public function getFumer()
    {
        return $this->fumer;
    }

    /**
     * @param mixed $fumer
     */
    public function setFumer($fumer)
    {
        $this->fumer = $fumer;
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
     * @ORM\Column(name="description",type="string",length=255,nullable=true)
     */
    public $description;
    /**
     * @return mixed
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param mixed $depart
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    }

    /**
     * @return mixed
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }

    /**
     * @param mixed $arrivee
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;
    }

    /**
     * @return mixed
     */
    public function getHeuredepart()
    {
        return $this->heuredepart;
    }

    /**
     * @param mixed $heuredepart
     */
    public function setHeuredepart($heuredepart)
    {
        $this->heuredepart = $heuredepart;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * @param mixed $disponible
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }













}