<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 */
class Chapitre
{
    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $presentation;

    /**
     * @var string
     */
    private $objectif;

    /**
     * @var integer
     */
    private $etat;

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
    private $id;

    /**
     * @var \Mooc\MoocBundle\Entity\Quiz
     */
    private $idquiz;

    /**
     * @var \Mooc\MoocBundle\Entity\Cours
     */
    private $idcours;


    /**
     * Set titre
     *
     * @param string $titre
     * @return Chapitre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Chapitre
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     * @return Chapitre
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
     * Set etat
     *
     * @param integer $etat
     * @return Chapitre
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Chapitre
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
     * @return Chapitre
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idquiz
     *
     * @param \Mooc\MoocBundle\Entity\Quiz $idquiz
     * @return Chapitre
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
     * Set idcours
     *
     * @param \Mooc\MoocBundle\Entity\Cours $idcours
     * @return Chapitre
     */
    public function setIdcours(\Mooc\MoocBundle\Entity\Cours $idcours = null)
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
}
