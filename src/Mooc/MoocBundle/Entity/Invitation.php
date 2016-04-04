<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitation")
 * @ORM\Entity
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
     * @ORM\Column(name="date_invit", type="date", nullable=false)
     */
    private $dateInvit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_confi", type="date", nullable=false)
     */
    private $dateConfi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_vue", type="date", nullable=false)
     */
    private $dateVue;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    function getId() {
        return $this->id;
    }

    function getNomExp() {
        return $this->nomExp;
    }

    function getNomDes() {
        return $this->nomDes;
    }

    function getDateInvit() {
        return $this->dateInvit;
    }

    function getDateConfi() {
        return $this->dateConfi;
    }

    function getDateVue() {
        return $this->dateVue;
    }

    function getEtat() {
        return $this->etat;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomExp($nomExp) {
        $this->nomExp = $nomExp;
    }

    function setNomDes($nomDes) {
        $this->nomDes = $nomDes;
    }

    function setDateInvit(\DateTime $dateInvit) {
        $this->dateInvit = $dateInvit;
    }

    function setDateConfi(\DateTime $dateConfi) {
        $this->dateConfi = $dateConfi;
    }

    function setDateVue(\DateTime $dateVue) {
        $this->dateVue = $dateVue;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }


}
