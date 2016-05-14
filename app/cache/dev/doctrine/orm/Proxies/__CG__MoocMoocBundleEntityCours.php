<?php

namespace Proxies\__CG__\Mooc\MoocBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cours extends \Mooc\MoocBundle\Entity\Cours implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'idcours', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'nomCours', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'description', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'difficulte', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'objectif', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'video', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'etat', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'idquiz', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'cinformateur'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'idcours', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'nomCours', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'description', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'difficulte', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'objectif', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'video', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'etat', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'idquiz', '' . "\0" . 'Mooc\\MoocBundle\\Entity\\Cours' . "\0" . 'cinformateur'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cours $proxy) {
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
    public function getIdcours()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdcours();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcours', []);

        return parent::getIdcours();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomCours', []);

        return parent::getNomCours();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getDifficulte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDifficulte', []);

        return parent::getDifficulte();
    }

    /**
     * {@inheritDoc}
     */
    public function getObjectif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjectif', []);

        return parent::getObjectif();
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
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
    public function getIdquiz()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdquiz', []);

        return parent::getIdquiz();
    }

    /**
     * {@inheritDoc}
     */
    public function getCinformateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCinformateur', []);

        return parent::getCinformateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcours($idcours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcours', [$idcours]);

        return parent::setIdcours($idcours);
    }

    /**
     * {@inheritDoc}
     */
    public function setNomCours($nomCours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomCours', [$nomCours]);

        return parent::setNomCours($nomCours);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setDifficulte($difficulte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDifficulte', [$difficulte]);

        return parent::setDifficulte($difficulte);
    }

    /**
     * {@inheritDoc}
     */
    public function setObjectif($objectif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjectif', [$objectif]);

        return parent::setObjectif($objectif);
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo($video)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
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
    public function setIdquiz(\Mooc\MoocBundle\Entity\Quiz $idquiz)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdquiz', [$idquiz]);

        return parent::setIdquiz($idquiz);
    }

    /**
     * {@inheritDoc}
     */
    public function setCinformateur(\Mooc\MoocBundle\Entity\Formateur $cinformateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCinformateur', [$cinformateur]);

        return parent::setCinformateur($cinformateur);
    }

}
