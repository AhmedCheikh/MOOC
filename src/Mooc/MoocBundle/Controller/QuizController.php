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

    public function afficheQuizAction($id) {
        $tab = array();
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        foreach ($question as $q) {
            $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
            array_push($tab, $rep);
        }
        return $this->render('MoocMoocBundle:Quiz:afficherQuiz.html.twig', array('quiz' => $quiz, 'rep' => $tab));
    }

    public function ajouterQuizAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $quiz = new Quiz();
            $quiz->setTitre($request->get('titre'));
            $quiz->setType($request->get('radio'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_Ajouter_question', array('idquiz' => $quiz->getId()));
        }
        return $this->render('MoocMoocBundle:Quiz:ajouterQuiz.html.twig');
    }

    public function supprimerQuizAction($id) {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);
        $em->remove($quiz);
        $em->flush();
        return $this->redirectToRoute('mooc_mooc_listeQuiz');
    }

    public function PasserQuizAction(Request $request, $id) {
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
        return $this->redirectToRoute('mooc_mooc_note', array('note' => $note, 'id' => $id));
    }

    public function afficheQuizChronoAction($id) {
        $tab = array();
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        foreach ($question as $q) {
            $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
            array_push($tab, $rep);
        }
        return $this->render('MoocMoocBundle:Quiz:afficherQuizChronometre.html.twig', array('quiz' => $quiz, 'rep' => $tab));
    }

    public function afficheQuizModifierAction($id) {
        $tab = array();
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        foreach ($question as $q) {
            $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $q->getId()));
            array_push($tab, $rep);
        }
        return $this->render('MoocMoocBundle:Quiz:modifierQuiz.html.twig', array('quiz' => $quiz, 'rep' => $tab));
    }

    public function modifierQuizAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $q = $em->getRepository('MoocMoocBundle:Quiz')->find($id);
        $titre = $q->getTitre();
        $type = $q->getType();

        if ($request->getMethod() == 'POST') {

            $q->setTitre($request->get('titre'));
            $q->setType($request->get('radio'));

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_modifier_quiz', array('id' => $id));
        }
        return $this->render('MoocMoocBundle:Quiz:modifierQZ.html.twig', array('idquiz' => $id, 'titre' => $titre, 'type' => $type));
    }
    
    

    public function NoteAction($note,$id) {
        return $this->render('MoocMoocBundle:Quiz:note.html.twig', array('note' => $note,'id'=> $id));
    }


}
