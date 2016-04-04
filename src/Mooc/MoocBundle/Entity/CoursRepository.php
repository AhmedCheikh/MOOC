<?php

namespace Mooc\MoocBundle\Entity ;

use Doctrine\ORM\EntityRepository;

/**
 * Description of CoursRepository
 *
 * @author Ahmed
 */
class CoursRepository extends EntityRepository {
 public function chercher($id) {
        return $this->find($id);
    }

    public function chercherPar($critere, $ordre = NULL, $limit = null, $offset = null) {
        return $this->findBy($critere, $ordre, $limit, $offset);
    }

    /**
     * Exemple queryBuilder
     */
    public function chercherTout() {

        $qb = $this->createQueryBuilder('c');

        //on récupère la query
        $query = $qb->getQuery();

        //on récupère les résultats
        $result = $query->getResult();

        //on retourne le résultat
        return $result;
    }

    public function chercheParCIN($cin) {
        $qb = $this->createQueryBuilder('c');
        $qb->where('c.cinformateur = :n')
                ->setParameter('n', $cin);
        return $qb->getQuery()->getResult();
    }

    public function chercheParTitreDiff($titre, $diff) {
        $qb = $this->createQueryBuilder('c');

        $qb->where('c.nomCours = :p')
                ->andWhere('c.difficulte = :a')
                ->orderBy('c.id', 'DESC');

        $qb->setParameter('p', $titre)
                ->setParameter('a', $diff);

        return $qb->getQuery()->getResult();
    }

    /**
     * Exemple DQL
     */
    public function prenomCommencePar($titre){
        $query = $this->getEntityManager()
                ->createQuery('select c from MoocMoocBundle:Cours c where c.nomCours like :p');
        $query->setParameter('p', $titre.'%');
        return $query->getResult();
    }
}
