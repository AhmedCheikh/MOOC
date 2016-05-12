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
     * @ORM\Column(name="logo", type="string", nullable=true)
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
    public function getIdorganisme() {
        return $this->idorganisme;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSiteweb() {
        return $this->siteweb;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDocument() {
        return $this->document;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function getComplete() {
        return $this->complete;
    }

    public function setIdorganisme($idorganisme) {
        $this->idorganisme = $idorganisme;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setSiteweb($siteweb) {
        $this->siteweb = $siteweb;
        return $this;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setDocument($document) {
        $this->document = $document;
        return $this;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
        return $this;
    }

    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    public function setComplete($complete) {
        $this->complete = $complete;
        return $this;
    }

    public function __toString() {
        return $this->getNom();
    }


}
