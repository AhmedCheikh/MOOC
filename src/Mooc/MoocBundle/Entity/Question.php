<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="IDX_B6F7494E77DD0B32", columns={"idquiz"})})
 * @ORM\Entity
 */

class Question
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
     * @ORM\Column(name="question", type="string", length=255, nullable=false)
     */
    private $question;
    
    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquiz", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idquiz;



    public function getId() {
        return $this->id;
    }

    public function getQuestion() {
        return $this->question;
    }

    public function getIdquiz() {
        return $this->idquiz;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setQuestion($question) {
        $this->question = $question;
        return $this;
    }

    public function setIdquiz( $idquiz) {
        $this->idquiz = $idquiz;
        return $this;
    }


}
