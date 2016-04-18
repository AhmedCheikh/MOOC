<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre", indexes={@ORM\Index(name="IDX_8C62B02577DD0B32", columns={"idquiz"}), @ORM\Index(name="IDX_8C62B0252BCFE085", columns={"idcours"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Chapitre {

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
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="blob", nullable=false)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif", type="string", length=255, nullable=false)
     */
    private $objectif;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    private $video;
/**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'bundles/moocmooc/video';
    }

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;



    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->path);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcours", referencedColumnName="idcours")
     * })
     */
    private $idcours;

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquiz", referencedColumnName="id")
     * })
     */
    private $idquiz;

   
    /**
     * Set titre
     *
     * @param string $titre
     * @return Chapitre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set presentation
     *
     * @param blob $presentation
     * @return Chapitre
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return blob 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     * @return Chapitre
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return string 
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Chapitre
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idquiz
     *
     * @param \Mooc\MoocBundle\Entity\Quiz $idquiz
     * @return Chapitre
     */
    public function setIdquiz($idquiz)
    {
        $this->idquiz = $idquiz;

        return $this;
    }

    /**
     * Get idquiz
     *
     * @return \Mooc\MoocBundle\Entity\Quiz 
     */
    public function getIdquiz()
    {
        return $this->idquiz;
    }

    /**
     * Set idcours
     *
     * @param \Mooc\MoocBundle\Entity\Cours $idcours
     * @return Chapitre
     */
    public function setIdcours($idcours )
    {
        $this->idcours = $idcours;

        return $this;
    }

    /**
     * Get idcours
     *
     * @return \Mooc\MoocBundle\Entity\Cours 
     */
    public function getIdcours()
    {
        return $this->idcours;
    }
}
