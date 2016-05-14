<?php

namespace Proxies\__CG__\Mooc\MoocBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formateur extends \Mooc\MoocBundle\Entity\Formateur implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'cin', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'nom', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'prenom', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'email', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'etat', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'avatar', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'cv', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'login', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'password', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'Organisme', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'cvFile', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'avatarFile'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'cin', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'nom', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'prenom', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'email', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'etat', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'avatar', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'cv', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'login', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'password', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'Organisme', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'cvFile', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Formateur' . "\0" . 'avatarFile'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formateur $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getOrganisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganisme', []);

        return parent::getOrganisme();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganisme($Organisme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganisme', [$Organisme]);

        return parent::setOrganisme($Organisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getCin();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', []);

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function getCv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCv', []);

        return parent::getCv();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin($cin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', [$cin]);

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function setCv($cv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCv', [$cv]);

        return parent::setCv($cv);
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        return parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setCvFile(\Symfony\Component\HttpFoundation\File\File $cv = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCvFile', [$cv]);

        return parent::setCvFile($cv);
    }

    /**
     * {@inheritDoc}
     */
    public function getCvFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCvFile', []);

        return parent::getCvFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatarFile(\Symfony\Component\HttpFoundation\File\File $avatar = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatarFile', [$avatar]);

        return parent::setAvatarFile($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatarFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatarFile', []);

        return parent::getAvatarFile();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}