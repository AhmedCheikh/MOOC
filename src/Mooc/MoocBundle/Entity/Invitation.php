<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitation")
 * @ORM\Entity(repositoryClass="Mooc\MoocBundle\Entity\InvitationRepository")
 */
class Invitation
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
     * @ORM\Column(name="nom_exp", type="string", length=45, nullable=false)
     */
    private $nom_exp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_des", type="string", length=45, nullable=false)
     */
    private $nom_des;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invit", type="date", nullable=false)
     */
    private $date_invit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_confi", type="date", nullable=false)
     */
    private $date_confi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_vue", type="date", nullable=false)
     */
    private $date_vue;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    public function getId() {
        return $this->id;
    }

    public function getNom_exp() {
        return $this->nom_exp;
    }

    public function getNom_des() {
        return $this->nom_des;
    }

    public function getDate_invit() {
        return $this->date_invit;
    }

    public function getDate_confi() {
        return $this->date_confi;
    }

    public function getDate_vue() {
        return $this->date_vue;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNom_exp($nom_exp) {
        $this->nom_exp = $nom_exp;
        return $this;
    }

    public function setNom_des($nom_des) {
        $this->nom_des = $nom_des;
        return $this;
    }

    public function setDate_invit(\DateTime $date_invit) {
        $this->date_invit = $date_invit;
        return $this;
    }

    public function setDate_confi(\DateTime $date_confi) {
        $this->date_confi = $date_confi;
        return $this;
    }

    public function setDate_vue(\DateTime $date_vue) {
        $this->date_vue = $date_vue;
        return $this;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }


}
