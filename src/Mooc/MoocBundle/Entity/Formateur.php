<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity(repositoryClass="Mooc\MoocBundle\Entity\FormateurRepository")
 */
class Formateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", nullable=true)
     */
    private $cv;

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
     * @ORM\ManyToOne(targetEntity="Organisme")
     * @ORM\JoinColumn(name="Organisme_id", referencedColumnName="idorganisme")
     */
    private $Organisme;
    
    /**
     * This unmapped property stores the binary contents of the file which stores
     * the cv subscribed by the user.
     *
     * @Vich\UploadableField(mapping="formateur_cv", fileNameProperty="cv")
     *
     * @var File
     */
    private $cvFile;
    
    /**
     * This unmapped property stores the binary contents of the file which stores
     * the avatar subscribed by the user.
     *
     * @Vich\UploadableField(mapping="formateur_images", fileNameProperty="avatar")
     *
     * @var File
     */
    private $avatarFile;
    
    public function getOrganisme() {
        return $this->Organisme;
    }

    public function setOrganisme($Organisme) {
        $this->Organisme = $Organisme;
        return $this;
    }
    function getCin() {
        return $this->cin;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getEmail() {
        return $this->email;
    }

    function getEtat() {
        return $this->etat;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function getCv() {
        return $this->cv;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function setCin($cin) {
        $this->cin = $cin;
        return $this;
    }

    function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    function setAvatar($avatar) {
        $this->avatar = $avatar;
        return $this;
    }

    function setCv($cv) {
        $this->cv = $cv;
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

    /**
     * @param File $cv
     */
    public function setCvFile(File $cv = null)
    {
        $this->cvFile = $cv;
    }

    /**
     * @return File
     */
    public function getCvFile()
    {
        return $this->cvFile;
    }
    
    /**
     * @param File $avatar
     */
    public function setAvatarFile(File $avatar = null)
    {
        $this->avatarFile = $avatar;
    }

    /**
     * @return File
     */
    public function getAvatarFile()
    {
        return $this->avatarFile;
    }
    
    public function __toString() {
        return $this->getLogin();
    }


}
