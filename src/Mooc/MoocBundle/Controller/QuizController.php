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
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        return $this->render('MoocMoocBundle:Quiz:afficherQuiz.html.twig', array('question' => $question, 'quiz' => $quiz));
    }

    public function testAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $id));
        return $this->render('MoocMoocBundle:Quiz:test.html.twig', array('rep' => $rep));
    }

    public function ajouterQuizAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $quiz = new Quiz();
            $quiz->setTitre($request->get('titre'));
            $quiz->setType($request->get('radio'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();
            //return $this->redirectToRoute('mooc_mooc_Ajouter_question', array('idquiz' => $quiz->getId()));
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

    public function PasserQuizAction(Request $request) {

        $note = 0;
        if (isset($_POST['etat']) && $_POST['etat'] === '1') {
            $note = $note + 1;
        }

        return $this->redirectToRoute('mooc_mooc_note', array('note' => $note));
    }

    public function afficheQuizChronoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        return $this->render('MoocMoocBundle:Quiz:afficherQuizChronometre.html.twig', array('question' => $question, 'quiz' => $quiz));
    }

    public function NoteAction($note) {
        return $this->render('MoocMoocBundle:Quiz:note.html.twig', array('note' => $note));
    }

    public function afficheQuizModifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        return $this->render('MoocMoocBundle:Quiz:modifierQuiz.html.twig', array('question' => $question, 'quiz' => $quiz));
    }

    public function testModifierAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $id));
        return $this->render('MoocMoocBundle:Quiz:testmodifier.html.twig', array('rep' => $rep));
    }

}
