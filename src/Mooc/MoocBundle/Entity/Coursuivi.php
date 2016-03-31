<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coursuivi
 */
class Coursuivi
{
    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var float
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var string
     */
    private $appreciation;

    /**
     * @var integer
     */
    private $idcoursuivi;

    /**
     * @var \Mooc\MoocBundle\Entity\Apprenant
     */
    private $cinapprenant;

    /**
     * @var \Mooc\MoocBundle\Entity\Cours
     */
    private $idCours;


    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Coursuivi
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set note
     *
     * @param float $note
     * @return Coursuivi
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Coursuivi
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set appreciation
     *
     * @param string $appreciation
     * @return Coursuivi
     */
    public function setAppreciation($appreciation)
    {
        $this->appreciation = $appreciation;

        return $this;
    }

    /**
     * Get appreciation
     *
     * @return string 
     */
    public function getAppreciation()
    {
        return $this->appreciation;
    }

    /**
     * Get idcoursuivi
     *
     * @return integer 
     */
    public function getIdcoursuivi()
    {
        return $this->idcoursuivi;
    }

    /**
     * Set cinapprenant
     *
     * @param \Mooc\MoocBundle\Entity\Apprenant $cinapprenant
     * @return Coursuivi
     */
    public function setCinapprenant(\Mooc\MoocBundle\Entity\Apprenant $cinapprenant = null)
    {
        $this->cinapprenant = $cinapprenant;

        return $this;
    }

    /**
     * Get cinapprenant
     *
     * @return \Mooc\MoocBundle\Entity\Apprenant 
     */
    public function getCinapprenant()
    {
        return $this->cinapprenant;
    }

    /**
     * Set idCours
     *
     * @param \Mooc\MoocBundle\Entity\Cours $idCours
     * @return Coursuivi
     */
    public function setIdCours(\Mooc\MoocBundle\Entity\Cours $idCours = null)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours
     *
     * @return \Mooc\MoocBundle\Entity\Cours 
     */
    public function getIdCours()
    {
        return $this->idCours;
    }
}
