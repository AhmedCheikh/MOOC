<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Entity;
use \Doctrine\ORM\EntityRepository;

/**
 * Description of ReponseRepository
 *
 * @author Nour
 */
class ReponseRepository extends EntityRepository {

    public function chercher($idquestion) {
        $qb = $this->createQueryBuilder('r');

        $qb->where('r.idquestion = :z');

        $qb->setParameter('z', $idquestion);


        return $qb->getQuery()->getResult();
    }

}
