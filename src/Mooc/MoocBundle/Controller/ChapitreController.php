<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Chapitre;
use Mooc\MoocBundle\Entity\Cours;

/**
 * Description of ChapitreController
 *
 * @author Nour
 */
class ChapitreController extends Controller {

    public function affichelistChapitresAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $Formateur = $repository->findOneBy(array('cin' => $request->get('cin')));

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $request->get('cin');
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes = :a and m.etat = 0")
                ->setParameter('a', $var);
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $var);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $listeChapitres = $em->getRepository('MoocMoocBundle:Chapitre')->findBy(array('idcours' => $id));
        return $this->render('MoocMoocBundle:Chapitre:listechapitreformateur.html.twig', array('listeChapitres' => $listeChapitres, 'id' => $id, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

    public function affichelistChapitresAppAction($id) {


        $em = $this->getDoctrine()->getManager();
        $listeChapitres = $em->getRepository('MoocMoocBundle:Chapitre')->findBy(array('idcours' => $id));
        return $this->render('MoocMoocBundle:Chapitre:listechapitreApprenant.html.twig', array('listeChapitres' => $listeChapitres, 'id' => $id));
    }

    public function afficheChapitreAction($id, Request $request) {
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository1->findOneBy(array('login' => $request->get('login')));
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        return $this->render('MoocMoocBundle:Chapitre:afficherChapitre.html.twig', array('chapitre' => $chapitre, 'apprenant' => $Apprenant));
    }

    public function afficheChapitreFormAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $Formateur = $repository->findOneBy(array('cin' => $request->get('cin')));

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $request->get('cin');
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes = :a and m.etat = 0")
                ->setParameter('a', $var);
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $var);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************//


        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        return $this->render('MoocMoocBundle:Chapitre:afficherChapitreForm.html.twig', array('chapitre' => $chapitre, 'id' => $id, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

    public function ajouterChapitreAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $Formateur = $repository->findOneBy(array('cin' => $request->get('cin')));

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $request->get('cin');
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes = :a and m.etat = 0")
                ->setParameter('a', $var);
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $var);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************//

        if ($request->getMethod() == 'POST') {

            $q = $request->get('q');

            $chapitre = new Chapitre();
            $chapitre->setTitre($request->get('titre'));
            $em2 = $this->getDoctrine()->getManager();
            $chapitre->setIdquiz($em2->getRepository('MoocMoocBundle:Quiz')->find($q));
            $chapitre->setIdcours($em2->getRepository('MoocMoocBundle:Cours')->find($id));
            $p = $request->get('presentation');
            $chapitre->setPresentation($p);
            //sfaxien1702

            $chapitre->setObjectif($request->get('objectif'));
            $x = $request->get('video');
            $chapitre->setVideo($x);


            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
//        return $this->render('MoocMoocBundle:Chapitre:listechapitreformateur.html.twig', array('listeChapitres' => $listeChapitres, 'id' => $id, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
            return $this->affichelistChapitresAction($id, $request);
        }

        $em1 = $this->getDoctrine()->getManager();
        $listeQuiz = $em1->getRepository('MoocMoocBundle:Quiz')->findBy(array('type' => 0));
        return $this->render('MoocMoocBundle:Chapitre:ajouterChapitre.html.twig', array('listeQuiz' => $listeQuiz, 'id' => $id, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

    public function modifierChapitreAction($id, $idcours, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $Formateur = $repository->findOneBy(array('cin' => $request->get('cin')));

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $request->get('cin');
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes = :a and m.etat = 0")
                ->setParameter('a', $var);
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $var);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************/

        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        if ($request->getMethod() == 'POST') {
            $q = $request->get('q');
            $chapitre->setTitre($request->get('titre'));
            $chapitre->setIdquiz($em->getRepository('MoocMoocBundle:Quiz')->find($q));
            $chapitre->setPresentation($request->get('presentation'));
            $chapitre->setObjectif($request->get('objectif'));
            $chapitre->setVideo($request->get('video'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
            return $this->affichelistChapitresAction($idcours, $request);
        }
        $em1 = $this->getDoctrine()->getManager();
        $listeQuiz = $em1->getRepository('MoocMoocBundle:Quiz')->findBy(array('type' => 0));
        return $this->render('MoocMoocBundle:Chapitre:modifierChapitre.html.twig', array('listeQuiz' => $listeQuiz, 'chapitre' => $chapitre, 'idchapitre' => $id, 'id' => $idcours, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

    public function supprimerChapitreAction($id, $idcours, Request $request) {

        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        $em->remove($chapitre);
        $em->flush();
//        return $this->redirectToRoute('mooc_mooc_listechapitre', array('id' => $idcours));
        return $this->affichelistChapitresAction($idcours, $request);
    }

}
