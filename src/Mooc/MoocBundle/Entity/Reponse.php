<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="IDX_5FB6DEC71C220143", columns={"idquestion"})})
 * @ORM\Entity
 */
class Reponse
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
     * @ORM\Column(name="rep", type="string", length=255, nullable=false)
     */
    private $rep;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

/**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquestion", referencedColumnName="id")
     * })
     */
    private $idquestion;

    public function getId() {
        return $this->id;
    }

    public function getRep() {
        return $this->rep;
    }

    public function getEtat() {
        return $this->etat;
    }



    public function getIdquestion() {
        return $this->idquestion;
    }


    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setRep($rep) {
        $this->rep = $rep;
        return $this;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }



    public function setIdquestion($idquestion) {
        $this->idquestion = $idquestion;
        return $this;
    }





}
