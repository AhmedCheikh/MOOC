<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisme
 *
 * @ORM\Table(name="organisme")
 * @ORM\Entity(repositoryClass="Mooc\MoocBundle\Entity\OrganismeRepository")
 */
class Organisme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idorganisme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorganisme;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=45, nullable=true)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="blob", nullable=true)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="complete", type="string", length=20, nullable=false)
     */
    private $complete;
    function getIdorganisme() {
        return $this->idorganisme;
    }

    function getNom() {
        return $this->nom;
    }

    function getEmail() {
        return $this->email;
    }

    function getSiteweb() {
        return $this->siteweb;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getDescription() {
        return $this->description;
    }

    function getDocument() {
        return $this->document;
    }

    function getLogo() {
        return $this->logo;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getEtat() {
        return $this->etat;
    }

    function getComplete() {
        return $this->complete;
    }

    function setIdorganisme($idorganisme) {
        $this->idorganisme = $idorganisme;
        return $this;
    }

    function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setSiteweb($siteweb) {
        $this->siteweb = $siteweb;
        return $this;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    function setDocument($document) {
        $this->document = $document;
        return $this;
    }

    function setLogo($logo) {
        $this->logo = $logo;
        return $this;
    }

    function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    function setComplete($complete) {
        $this->complete = $complete;
        return $this;
    }



}
