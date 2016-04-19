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
            $reponse1->setReponse($request->get('reponse1'));
            $reponse1->setIdquestion($question);
            $reponse1->setEtat($request->get('rep1'));

            $reponse2 = new Reponse();
            $reponse2->setReponse($request->get('reponse2'));
            $reponse2->setIdquestion($question);
            $reponse2->setEtat($request->get('rep2'));


            $reponse3 = new Reponse();
            $reponse3->setReponse($request->get('reponse3'));
            $reponse3->setIdquestion($question);
            $reponse3->setEtat($request->get('rep3'));


            $reponse4 = new Reponse();
            $reponse4->setReponse($request->get('reponse4'));
            $reponse4->setIdquestion($question);
            $reponse4->setEtat($request->get('rep4'));


            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse1);
            $em->persist($reponse2);
            $em->persist($reponse3);
            $em->persist($reponse4);

            $em->flush();
            return $this->redirectToRoute('mooc_mooc_listeQuiz');
        }
        return $this->render('MoocMoocBundle:Question:ajouterQuestion.html.twig', array('idquiz' => $idquiz));
    }

    public function modifierQuestionAction($idquestion,Request $request) {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('MoocMoocBundle:Question')->find($idquestion);
        if ($request->getMethod() == 'POST') {

            $quest = $request->get('ques');
            $question->setQuestion($quest);

//            $rep1 = $request->get('reponse1');
//            $rep2 = $request->get('reponse2');
//            $rep3 = $request->get('reponse3');
//            $rep4 = $request->get('reponse4');
//            array $lr=-($rep1, $rep2 ,$rep3,$rep4);
//
//
//            $listreponse = $em->getRepository('MoocMoocBundle:Reponse')->findAll($idquestion);
//            foreach ($listreponse as $r) {
//                $r->setReponse($request->get('reponse2'));
//                $r->setEtat($request->get('rep2'));
//            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_listeQuiz');
        }
        return $this->render('MoocMoocBundle:Question:modifierQuestion.html.twig', array('idquestion' => $idquestion));
    }

}
