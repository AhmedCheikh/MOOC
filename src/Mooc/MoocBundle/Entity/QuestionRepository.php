<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Entity;

use \Doctrine\ORM\EntityRepository;

/**
 * Description of QuestionRepository
 *
 * @author Nour
 */
class QuestionRepository extends EntityRepository {

    public function chercher($idquiz) {
        $qb = $this->createQueryBuilder('q');

        $qb->where('q.idquiz = :z');

        $qb->setParameter('z', $idquiz);


        return $qb->getQuery()->getResult();
    }

}
