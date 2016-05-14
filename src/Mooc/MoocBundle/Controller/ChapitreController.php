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

    public function affichelistChapitresAction() {
        $em = $this->getDoctrine()->getManager();
        $listeChapitres = $em->getRepository('MoocMoocBundle:Chapitre')->findAll();
        return $this->render('MoocMoocBundle:Chapitre:listechapitreformateur.html.twig', array('listeChapitres' => $listeChapitres));
    }

    public function affichelistChapitresAppAction($idcours) {
        $em = $this->getDoctrine()->getManager();
        $listeChapitres = $em->getRepository('MoocMoocBundle:Chapitre')->findBy(array('idcours' =>$idcours));
        return $this->render('MoocMoocBundle:Chapitre:listechapitreApprenant.html.twig', array('listeChapitres' => $listeChapitres));
    }

    public function afficheChapitreAction($id) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        return $this->render('MoocMoocBundle:Chapitre:afficherChapitre.html.twig', array('chapitre' => $chapitre));
    }

    public function ajouterChapitreAction(Request $request) {
    
        if ($request->getMethod() == 'POST') {
            $q = $request->get('q');

            $chapitre = new Chapitre();
            $chapitre->setTitre($request->get('titre'));
            $em2 = $this->getDoctrine()->getManager();
//            $quiz = $em2->getRepository('MoocMoocBundle:Quiz')->find($request->get('q'));
            $chapitre->setIdquiz($em2->getRepository('MoocMoocBundle:Quiz')->find($q));
            $chapitre->setIdcours($em2->getRepository('MoocMoocBundle:Cours')->find(1));

             $chapitre->setPresentation($request->get('presentation'));
            $chapitre->setObjectif($request->get('objectif'));
             $v=$request->get('video');
            $chapitre->setVideo($v->get);
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_listechapitre');
        }

        $em1 = $this->getDoctrine()->getManager();
        $listeQuiz = $em1->getRepository('MoocMoocBundle:Quiz')->findAll();
        return $this->render('MoocMoocBundle:Chapitre:ajouterChapitre.html.twig', array('listeQuiz' => $listeQuiz));
    }


    public function modifierChapitreAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
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
        return $this->render('MoocMoocBundle:Chapitre:modifierChapitre.html.twig', array('listeQuiz' => $listeQuiz, 'chapitre' => $chapitre, 'idchapitre' => $id));
    }

    public function supprimerChapitreAction($id) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        $em->remove($chapitre);
        $em->flush();
        return $this->redirectToRoute('mooc_mooc_listechapitre');
    }

}
