<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coursuivi
 *
 * @ORM\Table(name="coursuivi", indexes={@ORM\Index(name="fk_app1", columns={"cinapprenant"}), @ORM\Index(name="fk_cours", columns={"id_cours"})})
 * @ORM\Entity(repositoryClass="Mooc\MoocBundle\Entity\CoursuiviRepository")
 */
class Coursuivi
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="appreciation", type="string", length=255, nullable=false)
     */
    private $appreciation;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCoursuivi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcoursuivi;

    /**
     * @var \Apprenant
     *
     * @ORM\ManyToOne(targetEntity="Apprenant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cinapprenant", referencedColumnName="cin")
     * })
     */
    private $cinapprenant;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="idcours", onDelete="CASCADE")
     * })
     */
    private $idCours;

    function getCommentaire() {
        return $this->commentaire;
    }

    function getNote() {
        return $this->note;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getAppreciation() {
        return $this->appreciation;
    }

    function getIdcoursuivi() {
        return $this->idcoursuivi;
    }

    function getCinapprenant() {
        return $this->cinapprenant;
    }

    function getIdCours() {
        return $this->idCours;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    function setNote($note) {
        $this->note = $note;
        return $this;
    }

    function setDateDebut(\DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    function setAppreciation($appreciation) {
        $this->appreciation = $appreciation;
        return $this;
    }

    function setIdcoursuivi($idcoursuivi) {
        $this->idcoursuivi = $idcoursuivi;
        return $this;
    }

    function setCinapprenant(\Apprenant $cinapprenant) {
        $this->cinapprenant = $cinapprenant;
        return $this;
    }

    function setIdCours(\Cours $idCours) {
        $this->idCours = $idCours;
        return $this;
    }


}
