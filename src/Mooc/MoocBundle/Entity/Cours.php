<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="fk_courrr", columns={"idQuiz"}), @ORM\Index(name="fk_for", columns={"cinformateur"})})
 * @ORM\Entity(repositoryClass="Mooc\MoocBundle\Entity\CoursRepository")
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cours", type="string", length=255, nullable=false)
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=45, nullable=false)
     */
    private $difficulte;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif", type="string", length=255, nullable=false)
     */
    private $objectif;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=100, nullable=true)
     */
    private $video;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuiz", referencedColumnName="id")
     * })
     */
    private $idquiz;

    /**
     * @var \Formateur
     *
     * @ORM\ManyToOne(targetEntity="Formateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cinformateur", referencedColumnName="cin")
     * })
     */
    private $cinformateur;

    function getIdcours() {
        return $this->idcours;
    }

    function getNomCours() {
        return $this->nomCours;
    }

    function getDescription() {
        return $this->description;
    }

    function getDifficulte() {
        return $this->difficulte;
    }

    function getObjectif() {
        return $this->objectif;
    }

    function getVideo() {
        return $this->video;
    }

    function getEtat() {
        return $this->etat;
    }

    function getIdquiz() {
        return $this->idquiz;
    }

    function getCinformateur() {
        return $this->cinformateur;
    }

    function setIdcours($idcours) {
        $this->idcours = $idcours;
        return $this;
    }

    function setNomCours($nomCours) {
        $this->nomCours = $nomCours;
        return $this;
    }

    function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    function setDifficulte($difficulte) {
        $this->difficulte = $difficulte;
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

    function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    function setIdquiz(\Quiz $idquiz) {
        $this->idquiz = $idquiz;
        return $this;
    }

    function setCinformateur(\Formateur $cinformateur) {
        $this->cinformateur = $cinformateur;
        return $this;
    }




}
