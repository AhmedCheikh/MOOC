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
        if ($request->getMethod() == 'POST') {
            $question = new Question();
            $quest = $request->get('ques');
            $question->setQuestion($quest);
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
            return $this->redirectToRoute('mooc_mooc_Ajouter_question', array('idquiz' => $idquiz));
        }
        return $this->render('MoocMoocBundle:Question:ajouterQuestion.html.twig', array('idquiz' => $idquiz));
    }

    public function modifierQuestionAction($idquestion, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $quest = $em->getRepository('MoocMoocBundle:Question')->find($idquestion);
        $q = $quest->getQuestion($quest);
        $listreponse = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion' => $idquestion));


        if ($request->getMethod() == 'POST') {

          
            $quest->setQuestion($request->get('ques'));

            $listreponse[0]->setRep($request->get('reponse1'));
            $listreponse[0]->setEtat($request->get('rep1'));

            $listreponse[1]->setRep($request->get('reponse2'));
            $listreponse[1]->setEtat($request->get('rep2'));

            $listreponse[2]->setRep($request->get('reponse3'));
            $listreponse[2]->setEtat($request->get('rep3'));

            $listreponse[3]->setRep($request->get('reponse4'));
            $listreponse[3]->setEtat($request->get('rep4'));

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_listeQuiz');
        }
        return $this->render('MoocMoocBundle:Question:modifierQuestion.html.twig', array('idquestion' => $idquestion, 'ques' => $q, 'listreponse' => $listreponse));
    }
    
        public function supprimerQuestionAction($idquestion) {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('MoocMoocBundle:Question')->find($idquestion);
        $em->remove($question);
        $em->flush();
        return $this->redirectToRoute('mooc_mooc_listeQuiz');
    }

}
