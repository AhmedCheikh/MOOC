<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Question;
use Mooc\MoocBundle\Entity\Reponse;

/**
 * Description of QuestionController
 *
 * @author Nour
 */
class QuestionController extends Controller {

    public function ajouterQuestionAction(Request $request, $idquiz) {
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
            $question = new Question();

            $question->setQuestion($request->get('question'));
            $em1 = $this->getDoctrine()->getManager();
            $question->setIdquiz($em1->getRepository('MoocMoocBundle:Quiz')->find($idquiz));
            $em2 = $this->getDoctrine()->getManager();
            $em2->persist($question);
            $em2->flush();

            $reponse1 = new Reponse();
            $reponse1->setRep($request->get('reponse1'));
            $reponse1->setIdquestion($question);
            $reponse1->setEtat($request->get('rep1'));

            $reponse2 = new Reponse();
            $reponse2->setRep($request->get('reponse2'));
            $reponse2->setIdquestion($question);
            $reponse2->setEtat($request->get('rep2'));


            $reponse3 = new Reponse();
            $reponse3->setRep($request->get('reponse3'));
            $reponse3->setIdquestion($question);
            $reponse3->setEtat($request->get('rep3'));


            $reponse4 = new Reponse();
            $reponse4->setRep($request->get('reponse4'));
            $reponse4->setIdquestion($question);
            $reponse4->setEtat($request->get('rep4'));


            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse1);
            $em->persist($reponse2);
            $em->persist($reponse3);
            $em->persist($reponse4);

            $em->flush();
            return $this->render('MoocMoocBundle:Question:ajouterQuestion.html.twig', array('idquiz' => $idquiz, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
        }
        return $this->render('MoocMoocBundle:Question:ajouterQuestion.html.twig', array('idquiz' => $idquiz, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

    public function modifierQuestionAction($idquestion, $idquiz, Request $request) {
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
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($idquiz);
        $quest = $em->getRepository('MoocMoocBundle:Question')->find($idquestion);
        $q = $quest->getQuestion($quest);
        $listreponse = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $idquestion));

        $tab = array();
        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $idquiz));

        if ($request->getMethod() == 'POST') {


            $quest->setQuestion($request->get('question'));

            $listreponse[0]->setRep($request->get('reponse1'));
            $listreponse[0]->setEtat($request->get('rep1'));

            $listreponse[1]->setRep($request->get('reponse2'));
            $listreponse[1]->setEtat($request->get('rep2'));

            $listreponse[2]->setRep($request->get('reponse3'));
            $listreponse[2]->setEtat($request->get('rep3'));

            $listreponse[3]->setRep($request->get('reponse4'));
            $listreponse[3]->setEtat($request->get('rep4'));

            foreach ($question as $q) {
                $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
                array_push($tab, $rep);
            }

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->render('MoocMoocBundle:Quiz:modifierQuiz.html.twig', array('quiz' => $quiz, 'rep' => $tab, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
        }
        return $this->render('MoocMoocBundle:Question:modifierQuestion.html.twig', array('idquestion' => $idquestion, 'question' => $q, 'listreponse' => $listreponse, 'idquiz' => $idquiz, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

    public function supprimerQuestionAction($idquestion, $idquiz, Request $request) {
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
        $tab = array();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($idquiz);

        $qu = $em->getRepository('MoocMoocBundle:Question')->find($idquestion);

        $em->remove($qu);
        $em->flush();
        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $idquiz));
        foreach ($question as $q) {
            $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
            array_push($tab, $rep);
        }
        $em->flush();
        return $this->render('MoocMoocBundle:Quiz:modifierQuiz.html.twig', array('quiz' => $quiz, 'rep' => $tab, 'Formateur' => $Formateur, 'lstinvit' => $inv, 'nbaprec' => $j, 'nbrInvit' => count($inv)));
    }

}
