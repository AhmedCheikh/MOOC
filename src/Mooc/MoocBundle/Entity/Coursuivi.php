<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coursuivi
 *
 * @ORM\Table(name="coursuivi", indexes={@ORM\Index(name="fk_app1", columns={"cinapprenant"}), @ORM\Index(name="fk_cours", columns={"id_cours"})})
 * @ORM\Entity
 */
class Coursuivi
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="appreciation", type="string", length=255, nullable=false)
     */
    private $appreciation;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCoursuivi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcoursuivi;

    /**
     * @var \Apprenant
     *
     * @ORM\ManyToOne(targetEntity="Apprenant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cinapprenant", referencedColumnName="cin")
     * })
     */
    private $cinapprenant;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="idcours")
     * })
     */
    private $idCours;


}
