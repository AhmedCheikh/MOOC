<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Mooc\MoocBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of InvitationRepository
 *
 * @author Rimy Jeljeli
 */
class InvitationRepository  extends EntityRepository {
   
    
    
    
    
    public function chercherInvit($nom, $etat) {
        $qb = $this->createQueryBuilder('c');

        $qb->where('c.nomDes = :n')
                ->andWhere('c.etat = :e')
                ->orderBy('c.id', 'DESC');

        $qb->setParameter('n', $nom)
                ->setParameter('e', $etat);

        return $qb->getQuery()->getResult();
    }

}
