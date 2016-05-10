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
     * @ORM\Column(name="reponse", type="string", length=255, nullable=false)
     */
    private $reponse;

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

    public function getReponse() {
        return $this->reponse;
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

    public function setReponse($reponse) {
        $this->reponse = $reponse;
        return $this;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

   
    function setIdquestion(\Question $idquestion) {
        $this->idquestion = $idquestion;
        return $this;
    }




}
