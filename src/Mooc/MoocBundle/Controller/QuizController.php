<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Quiz;

/**
 * Description of QuizController
 *
 * @author Nour
 */
class QuizController extends Controller {

    public function affichelistquizAction() {
        $em = $this->getDoctrine()->getManager();
        $listeQuiz = $em->getRepository('MoocMoocBundle:Quiz')->findAll();
        return $this->render('MoocMoocBundle:Quiz:listequizformateur.html.twig', array('listeQuiz' => $listeQuiz));
    }

    public function afficheQuizAction($id, Request $request) {
          $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository1->findOneBy(array('login' => $request->get('login')));
        
        $tab = array();
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        
     $l = sizeof($question);
     
        $list= array();
       for ($i = 0; $i < 5; $i++) {
            $v = mt_rand(0, $l-1);
           $list[$i] = $question[$v];
        }
        foreach ($list as $q) {
            $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
            array_push($tab, $rep);
        }
        return $this->render('MoocMoocBundle:Quiz:afficherQuiz.html.twig', array('quiz' => $quiz, 'rep' => $tab,'apprenant' =>$Apprenant));
    }

 public function ajouterQuizAction(Request $request) {
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

        if ($request->getMethod() == 'POST') {
            $quiz = new Quiz();
            $quiz->setTitre($request->get('titre'));
            $quiz->setType($request->get('radio'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();
            return $this->render('MoocMoocBundle:Question:ajouterQuestion.html.twig', array('idquiz' => $quiz->getId(), 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
        }
        return $this->render('MoocMoocBundle:Quiz:ajouterQuiz.html.twig', array('Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

    public function supprimerQuizAction($id,Request $request) {
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

        $dql = "SELECT a FROM MoocMoocBundle:Cours a where a.cinformateur = $var";
        $query = $em->createQuery($dql);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 5/* limit per page */
        );

        
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);
        $em->remove($quiz);
        $em->flush();
        
        return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('Formateur' => $Formateur, 'cin' => $Formateur->getCin(), 'pagination' => $pagination, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));

        }

    public function PasserQuizAction($id,Request $request) {
         $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository1->findOneBy(array('login' => $request->get('login')));
        $note = 0;
        for ($i = 0; $i < 4; $i++) {
            if ((isset($_POST[$i]) == 1)) {
                $note = $note + 4;
            } else if ((isset($_POST[$i]) == 0)) {
                $note = $note - 1;
            } else {
                $note = note + 0;
            }
        }
        return $this->render('MoocMoocBundle:Quiz:note.html.twig', array('note' => $note, 'id' => $id,'apprenant' =>$Apprenant));
       // return $this->redirectToRoute('mooc_mooc_note', array('note' => $note, 'id' => $id,'apprenant' =>$Apprenant));
    }

    public function afficheQuizChronoAction($id, Request $request) {
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository1->findOneBy(array('login' => $request->get('login')));
        
        $tab = array();
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        $l = sizeof($question);
     
        $list= array();
       for ($i = 0; $i < 5; $i++) {
            $v = mt_rand(0, $l-1);
           $list[$i] = $question[$v];
        }
        foreach ($list as $q) {
            $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
            array_push($tab, $rep);
        }
        return $this->render('MoocMoocBundle:Quiz:afficherQuizChronometre.html.twig', array('quiz' => $quiz, 'rep' => $tab,'apprenant' =>$Apprenant));
    }

    public function afficheQuizModifierAction($id, Request $request) {
        $tab = array();
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);
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


        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        foreach ($question as $q) {
            $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
            array_push($tab, $rep);
        }
        return $this->render('MoocMoocBundle:Quiz:modifierQuiz.html.twig', array('quiz' => $quiz, 'rep' => $tab, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

      public function modifierQuizAction($id, Request $request) {
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

        $q = $em->getRepository('MoocMoocBundle:Quiz')->find($id);
        $titre = $q->getTitre();
        $type = $q->getType();

        if ($request->getMethod() == 'POST') {

            $q->setTitre($request->get('titre'));
            $q->setType($request->get('radio'));

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            //return $this->render('MoocMoocBundle:Quiz:modifierQuiz.html.twig', array('id' => $id, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
            return $this->afficheQuizModifierAction($id, $request);
            }
        return $this->render('MoocMoocBundle:Quiz:modifierQZ.html.twig', array('idquiz' => $id, 'titre' => $titre, 'type' => $type, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }
    
    

    public function NoteAction($note,$id) {
        return $this->render('MoocMoocBundle:Quiz:note.html.twig', array('note' => $note,'id'=> $id));
    }


}
