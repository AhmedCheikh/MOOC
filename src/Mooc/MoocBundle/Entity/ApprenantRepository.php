<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ApprenantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApprenantRepository extends EntityRepository
{
    public function nombreApprenant(){
        $query = $this->getEntityManager()
                ->createQuery("select count(a) from MoocMoocBundle:Apprenant a");
        return $query->getSingleScalarResult();
    }
}
