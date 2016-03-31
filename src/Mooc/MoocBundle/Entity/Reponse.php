<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 */
class Reponse
{
    /**
     * @var integer
     */
    private $etat;

    /**
     * @var string
     */
    private $reponse;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Mooc\MoocBundle\Entity\Question
     */
    private $idquestion;


    /**
     * Set etat
     *
     * @param integer $etat
     * @return Reponse
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
     * Set reponse
     *
     * @param string $reponse
     * @return Reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
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
     * Set idquestion
     *
     * @param \Mooc\MoocBundle\Entity\Question $idquestion
     * @return Reponse
     */
    public function setIdquestion(\Mooc\MoocBundle\Entity\Question $idquestion = null)
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * Get idquestion
     *
     * @return \Mooc\MoocBundle\Entity\Question 
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }
}
