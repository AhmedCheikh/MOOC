<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre", indexes={@ORM\Index(name="IDX_8C62B02577DD0B32", columns={"idquiz"}), @ORM\Index(name="IDX_8C62B0252BCFE085", columns={"idcours"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Chapitre {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string",length=255, nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif", type="string", length=255, nullable=false)
     */
    private $objectif;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcours", referencedColumnName="idcours", onDelete="CASCADE")
     * })
     */
    private $idcours;


    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquiz", referencedColumnName="id")
     * })
     */
    private $idquiz;

    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getPresentation() {
        return $this->presentation;
    }

    function getObjectif() {
        return $this->objectif;
    }

    function getVideo() {
        return $this->video;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    function setPresentation($presentation) {
        $this->presentation = $presentation;
        return $this;
    }

    function setObjectif($objectif) {
        $this->objectif = $objectif;
        return $this;
    }

    function setVideo($video) {
        $this->video = $video;
        return $this;
    }

/**
     * Set idcours
     *
     * @param \Mooc\MoocBundle\Entity\Cours $idcours
     * @return Chapitre
     */
    public function setIdcours($idcours )
    {
        $this->idcours = $idcours;

        return $this;
    }

    /**
     * Get idcours
     *
     * @return \Mooc\MoocBundle\Entity\Cours 
     */
    public function getIdcours()
    {
        return $this->idcours;
    }


    /**
     * Set idquiz
     *
     * @param \Mooc\MoocBundle\Entity\Quiz $idquiz
     * @return Chapitre
     */
    public function setIdquiz($idquiz)
    {
        $this->idquiz = $idquiz;

        return $this;
    }

    /**
     * Get idquiz
     *
     * @return \Mooc\MoocBundle\Entity\Quiz 
     */
    public function getIdquiz()
    {
        return $this->idquiz;
    }


}
