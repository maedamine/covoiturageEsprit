<?php

namespace PiEsprit\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\MessageBundle\Model\ParticipantInterface;

/**

 * @ORM\Entity
 *
 * @ORM\Table(name="utilisateur")

 */

class User extends BaseUser implements ParticipantInterface

{

    /**

     * @ORM\Id

     * @ORM\Column(type="integer")

     * @ORM\GeneratedValue(strategy="AUTO")

     */

    protected $id;




    /**



     * @ORM\Column(type="string", length=255 )



     */

    private $nom="";

    /**


     * @ORM\Column(type="string", length=255 )


     */

    private $prenom="";




    /**
     *
     *
     *
     * @ORM\Column(type="integer")
     */

    private $solde=100;


    /**
     *
     * @ORM\Column(type="string", length=255 )
     */

    private $ville="";


    /**


     * @Assert\Date()


     */

    private $birthday;


    /**
     * @ORM\Column(type="string",length=255)
     *
     *
     */

    private $imageProfil="";



    /**


     * @ORM\Column(type="integer")


     */

    private $telephone=0;

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
    public function getNom()
    {
        return $this->nom;
    }



    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getImageProfil()
    {
        return $this->imageProfil;
    }

    /**
     * @param mixed $imageProfil
     */
    public function setImageProfil($imageProfil)
    {
        $this->imageProfil = $imageProfil;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
















}