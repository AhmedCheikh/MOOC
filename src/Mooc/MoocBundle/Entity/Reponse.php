<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="fk_questt", columns={"idquestion"})})
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
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="rep", type="string", length=255, nullable=false)
     */
    private $rep;

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquestion", referencedColumnName="id")
     * })
     */
    private $idquestion;

    function getId() {
        return $this->id;
    }

    function getEtat() {
        return $this->etat;
    }

    function getRep() {
        return $this->rep;
    }

    function getIdquestion() {
        return $this->idquestion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setRep($rep) {
        $this->rep = $rep;
    }

    function setIdquestion(\Question $idquestion) {
        $this->idquestion = $idquestion;
    }


}
