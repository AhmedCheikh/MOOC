<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 */
class Invitation
{
    /**
     * @var string
     */
    private $nomExp;

    /**
     * @var string
     */
    private $nomDes;

    /**
     * @var \DateTime
     */
    private $dateInvit;

    /**
     * @var \DateTime
     */
    private $dateConfi;

    /**
     * @var \DateTime
     */
    private $dateVue;

    /**
     * @var integer
     */
    private $etat;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nomExp
     *
     * @param string $nomExp
     * @return Invitation
     */
    public function setNomExp($nomExp)
    {
        $this->nomExp = $nomExp;

        return $this;
    }

    /**
     * Get nomExp
     *
     * @return string 
     */
    public function getNomExp()
    {
        return $this->nomExp;
    }

    /**
     * Set nomDes
     *
     * @param string $nomDes
     * @return Invitation
     */
    public function setNomDes($nomDes)
    {
        $this->nomDes = $nomDes;

        return $this;
    }

    /**
     * Get nomDes
     *
     * @return string 
     */
    public function getNomDes()
    {
        return $this->nomDes;
    }

    /**
     * Set dateInvit
     *
     * @param \DateTime $dateInvit
     * @return Invitation
     */
    public function setDateInvit($dateInvit)
    {
        $this->dateInvit = $dateInvit;

        return $this;
    }

    /**
     * Get dateInvit
     *
     * @return \DateTime 
     */
    public function getDateInvit()
    {
        return $this->dateInvit;
    }

    /**
     * Set dateConfi
     *
     * @param \DateTime $dateConfi
     * @return Invitation
     */
    public function setDateConfi($dateConfi)
    {
        $this->dateConfi = $dateConfi;

        return $this;
    }

    /**
     * Get dateConfi
     *
     * @return \DateTime 
     */
    public function getDateConfi()
    {
        return $this->dateConfi;
    }

    /**
     * Set dateVue
     *
     * @param \DateTime $dateVue
     * @return Invitation
     */
    public function setDateVue($dateVue)
    {
        $this->dateVue = $dateVue;

        return $this;
    }

    /**
     * Get dateVue
     *
     * @return \DateTime 
     */
    public function getDateVue()
    {
        return $this->dateVue;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Invitation
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
