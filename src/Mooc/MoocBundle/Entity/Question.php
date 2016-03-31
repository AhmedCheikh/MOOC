<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 */
class Question
{
    /**
     * @var string
     */
    private $question;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Mooc\MoocBundle\Entity\Quiz
     */
    private $idquiz;


    /**
     * Set question
     *
     * @param string $question
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
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
     * @return Question
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
}
