<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Form\ChapitreType;
use Mooc\MoocBundle\Entity\Chapitre;

/**
 * Description of ChapitreController
 *
 * @author Nour
 */
class ChapitreController extends Controller {

    public function affichelistChapitresAction() {
        $em = $this->getDoctrine()->getManager();
        $listeChapitres = $em->getRepository('MoocMoocBundle:Chapitre')->findAll();
        return $this->render('MoocMoocBundle:Chapitre:listechapitreformateur.html.twig', array('listeChapitres' => $listeChapitres));
    }

    public function ajouterChapitreAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $cours = new Cours();
            $cours->setNomCours('Cours1')->setObjectif('Objectifs')->setDescription('description');
            $em3 = $this->getDoctrine()->getManager();
            $em3->persist($cours);
            $em3->flush();
            $chapitre = new Chapitre();
            $chapitre->setTitre($request->get('titre'));
            //$em2 = $this->getDoctrine()->getManager();
            //$id=$request->get('quiz');
//            $q = $em2->getRepository('MoocMoocBundle:Quiz')->find($request->get('quiz'));
//            $chapitre->setIdquiz($request->get($q));
            $chapitre->setIdcours($cours);
            //$chapitre->setPresentation($request->get('presentation'));
            $chapitre->setObjectif($request->get('objectif'));
            $chapitre->setVideo($request->get('video'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_Ajouter_chapitre');  }
        $em1 = $this->getDoctrine()->getManager();
        $listeQuiz = $em1->getRepository('MoocMoocBundle:Quiz')->findAll();
        return $this->render('MoocMoocBundle:Chapitre:ajouterChapitre.html.twig', array('listeQuiz' => $listeQuiz)); }

    public function modifierChapitreAction($idchapitre, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($idchapitre);
        if ($request->getMethod() == 'POST') {
            $chapitre->setTitre($request->get('titre'));
            $chapitre->setIdquiz($request->get('q'));
            //$chapitre->setPresentation($request->get('presentation'));
            $chapitre->setObjectif($request->get('objectif'));
            $chapitre->setVideo($request->get('video'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_listechapitre');
        }
        $em1 = $this->getDoctrine()->getManager();
        $listeQuiz = $em1->getRepository('MoocMoocBundle:Quiz')->findAll();
        return $this->render('MoocMoocBundle:Chapitre:modifierChapitre.html.twig', array('listeQuiz' => $listeQuiz, 'chapitre' => $chapitre, 'idchapitre' => $idchapitre));
    }

}
