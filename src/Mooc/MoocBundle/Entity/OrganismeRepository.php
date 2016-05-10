<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Mooc\MoocBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of OrganismeRepository
 *
 * @author Rimy Jeljeli
 */
class OrganismeRepository extends EntityRepository {

       public function nombreInvit($name){
        $query = $this->getEntityManager()
                ->createQuery("select count(i) from MoocMoocBundle:Invitation i where i.nom_des= :p");
                 $query->setParameter('p', $name);
        return $query->getSingleScalarResult();
    }
    
        public function NomFormateurCommencePar($nom){
        $query = $this->getEntityManager()
                ->createQuery('select c from MoocMoocBundle:Formateur c where c.prenom like :p');
        $query->setParameter('p', $nom.'%');
        return $query->getResult();
    }
    
    public function nombreOrganisme(){
        $query = $this->getEntityManager()
                ->createQuery("select count(o) from MoocMoocBundle:Organisme o");
        return $query->getSingleScalarResult();
    }
    
    public function nombreOrganismeNonValide(){
        $query = $this->getEntityManager()
                ->createQuery("select o from MoocMoocBundle:Organisme o where o.etat=0");
        return $query->getResult();
    }
    
    public function details($id) {
        $query = $this->getEntityManager()
                ->createQuery("select o from MoocMoocBundle:Organisme o where o.idorganisme = ?1");
//        $query->setParameter(1, $id);
//        $query->execute();
        $query->execute(array(1=>$id));
    }
    
    public function validerOrganisme($id) {
        $query = $this->getEntityManager()
                ->createQuery("update MoocMoocBundle:Organisme o set o.etat = '1'  where o.idorganisme = ?1");
//        $query->setParameter(1, $id);
//        $query->execute();
        $query->execute(array(1=>$id));
    }
    
    
}
