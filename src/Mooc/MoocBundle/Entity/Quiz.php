<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz")
 * @ORM\Entity
 */
class Quiz
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
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getType() {
        return $this->type;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    function setType($type) {
        $this->type = $type;
        return $this;
    }




}
