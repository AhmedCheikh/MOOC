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
    private $nomExp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_des", type="string", length=45, nullable=false)
     */
    private $nomDes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invit", type="date", nullable=true)
     */
    private $dateInvit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_confi", type="date", nullable=true)
     */
    private $dateConfi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_vue", type="date", nullable=true)
     */
    private $dateVue;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;
    
    public function getId() {
        return $this->id;
    }

    public function getNomExp() {
        return $this->nomExp;
    }

    public function getNomDes() {
        return $this->nomDes;
    }

    public function getDateInvit() {
        return $this->dateInvit;
    }

    public function getDateConfi() {
        return $this->dateConfi;
    }

    public function getDateVue() {
        return $this->dateVue;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNomExp($nomExp) {
        $this->nomExp = $nomExp;
        return $this;
    }

    public function setNomDes($nomDes) {
        $this->nomDes = $nomDes;
        return $this;
    }

    public function setDateInvit(\DateTime $dateInvit) {
        $this->dateInvit = $dateInvit;
        return $this;
    }

    public function setDateConfi(\DateTime $dateConfi) {
        $this->dateConfi = $dateConfi;
        return $this;
    }

    public function setDateVue(\DateTime $dateVue) {
        $this->dateVue = $dateVue;
        return $this;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }


}
