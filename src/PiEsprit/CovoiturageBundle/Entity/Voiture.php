<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 08/02/2017
 * Time: 20:27
 */

namespace PiEsprit\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="Voiture")
 * @UniqueEntity(
 *     fields={"matricule"},
 *     message="cette matricule est déja utilisé . Veuillez vérifier la votre "
 * )
 */
class Voiture
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    public $id;
    /**
     * @ORM\Column(type="string",length=225)
     */
    public $matricule;
    /**
     * @ORM\Column(type="string",length=225)
     */
    public $modele;
    /**
     * @ORM\Column(type="string",length=225)
     */
    public $marque;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    public $imageName;
    /**
     * @ORM\Column(type="integer")
     */
    public $nombreplaces;
    /**
     * @ORM\Column(type="string",length=225)
     */
    public $puissance;
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="voiture_image", fileNameProperty="imageName", size="imageSize")
     *
     * @var File
     */
    private $imageFile;
    /**
     * @ORM\ManyToOne(targetEntity="PiEsprit\UserBundle\Entity\User")
     */
    public $proprietaire;
    /**
     * @ORM\Column(type="text",nullable=true)
     */
    public $description;
    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * Voiture constructor.
     */
    public function __construct()
    {
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
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @param string $imageName
     *
     * @return Voiture
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @return mixed
     */
    public function getNombreplaces()
    {
        return $this->nombreplaces;
    }

    /**
     * @param mixed $nombreplaces
     */
    public function setNombreplaces($nombreplaces)
    {
        $this->nombreplaces = $nombreplaces;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Voiture
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @return mixed
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param mixed $proprietaire
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
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
     * @param integer $imageSize
     *
     * @return Voiture
     */
    public function setImageSize($imageSize)
    {
        $this->imageSize = $imageSize;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    function __toString()
    {
        /*if(is_null($this->matricule)) {
            return 'NULL';
        }
        return $this->matricule;*/

        return $this->marque;

    }


}