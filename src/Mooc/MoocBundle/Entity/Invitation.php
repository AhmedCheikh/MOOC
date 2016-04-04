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


}
