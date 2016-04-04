<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre", indexes={@ORM\Index(name="fk_chapt", columns={"idquiz"}), @ORM\Index(name="fk_co", columns={"idcours"})})
 * @ORM\Entity
 */
class Chapitre
{
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
     * @ORM\Column(name="presentation", type="blob", nullable=false)
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
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquiz", referencedColumnName="id")
     * })
     */
    private $idquiz;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcours", referencedColumnName="idcours")
     * })
     */
    private $idcours;

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

    function getIdquiz() {
        return $this->idquiz;
    }

    function getIdcours() {
        return $this->idcours;
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

    function setIdquiz(\Quiz $idquiz) {
        $this->idquiz = $idquiz;
        return $this;
    }

    function setIdcours(\Cours $idcours) {
        $this->idcours = $idcours;
        return $this;
    }


}
