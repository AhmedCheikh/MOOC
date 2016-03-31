<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisme
 */
class Organisme
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $siteweb;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $document;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var integer
     */
    private $idorganisme;

    /**
     * @var \Mooc\MoocBundle\Entity\Utilisateur
     */
    private $iduser;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Organisme
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Organisme
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Organisme
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Organisme
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Organisme
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Organisme
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set document
     *
     * @param string $document
     * @return Organisme
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Organisme
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Get idorganisme
     *
     * @return integer 
     */
    public function getIdorganisme()
    {
        return $this->idorganisme;
    }

    /**
     * Set iduser
     *
     * @param \Mooc\MoocBundle\Entity\Utilisateur $iduser
     * @return Organisme
     */
    public function setIduser(\Mooc\MoocBundle\Entity\Utilisateur $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Mooc\MoocBundle\Entity\Utilisateur 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
