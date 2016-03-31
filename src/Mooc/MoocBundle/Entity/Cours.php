<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 */
class Cours
{
    /**
     * @var string
     */
    private $nomCours;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $difficulte;

    /**
     * @var string
     */
    private $objectif;

    /**
     * @var string
     */
    private $video;

    /**
     * @var integer
     */
    private $etatvideo;

    /**
     * @var integer
     */
    private $idcours;

    /**
     * @var \Mooc\MoocBundle\Entity\Quiz
     */
    private $idquiz;

    /**
     * @var \Mooc\MoocBundle\Entity\Formateur
     */
    private $cinformateur;


    /**
     * Set nomCours
     *
     * @param string $nomCours
     * @return Cours
     */
    public function setNomCours($nomCours)
    {
        $this->nomCours = $nomCours;

        return $this;
    }

    /**
     * Get nomCours
     *
     * @return string 
     */
    public function getNomCours()
    {
        return $this->nomCours;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Cours
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     * @return Cours
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string 
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     * @return Cours
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return string 
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Cours
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set etatvideo
     *
     * @param integer $etatvideo
     * @return Cours
     */
    public function setEtatvideo($etatvideo)
    {
        $this->etatvideo = $etatvideo;

        return $this;
    }

    /**
     * Get etatvideo
     *
     * @return integer 
     */
    public function getEtatvideo()
    {
        return $this->etatvideo;
    }

    /**
     * Get idcours
     *
     * @return integer 
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set idquiz
     *
     * @param \Mooc\MoocBundle\Entity\Quiz $idquiz
     * @return Cours
     */
    public function setIdquiz(\Mooc\MoocBundle\Entity\Quiz $idquiz = null)
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

    /**
     * Set cinformateur
     *
     * @param \Mooc\MoocBundle\Entity\Formateur $cinformateur
     * @return Cours
     */
    public function setCinformateur(\Mooc\MoocBundle\Entity\Formateur $cinformateur = null)
    {
        $this->cinformateur = $cinformateur;

        return $this;
    }

    /**
     * Get cinformateur
     *
     * @return \Mooc\MoocBundle\Entity\Formateur 
     */
    public function getCinformateur()
    {
        return $this->cinformateur;
    }
}
