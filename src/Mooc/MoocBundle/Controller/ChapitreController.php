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

    public function affichelistChapitresAction($id) {
        $em = $this->getDoctrine()->getManager();
        $listeChapitres = $em->getRepository('MoocMoocBundle:Chapitre')->findBy(array('idcours' =>$id));
        return $this->render('MoocMoocBundle:Chapitre:listechapitreformateur.html.twig', array('listeChapitres' => $listeChapitres,'id' =>$id));
    }

    public function affichelistChapitresAppAction($id) {
        $em = $this->getDoctrine()->getManager();
        $listeChapitres = $em->getRepository('MoocMoocBundle:Chapitre')->findBy(array('idcours' =>$id));
        return $this->render('MoocMoocBundle:Chapitre:listechapitreApprenant.html.twig', array('listeChapitres' => $listeChapitres,'id'=>$id));
    }
    

    public function afficheChapitreAction($id) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        return $this->render('MoocMoocBundle:Chapitre:afficherChapitre.html.twig', array('chapitre' => $chapitre));
    }
   
    
        public function afficheChapitreFormAction($id) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        return $this->render('MoocMoocBundle:Chapitre:afficherChapitreForm.html.twig', array('chapitre' => $chapitre,'id'=>$id));
    }

    public function ajouterChapitreAction(Request $request,$id) {
    
        if ($request->getMethod() == 'POST') {
            $q = $request->get('q');

            $chapitre = new Chapitre();
            $chapitre->setTitre($request->get('titre'));
            $em2 = $this->getDoctrine()->getManager();
            $chapitre->setIdquiz($em2->getRepository('MoocMoocBundle:Quiz')->find($q));
            $chapitre->setIdcours($em2->getRepository('MoocMoocBundle:Cours')->find($id));
            $p=$request->files->get('presentation')->getClientOriginalName();
             $chapitre->setPresentation($p);
            $chapitre->setObjectif($request->get('objectif'));
            $x=$request->files->get('video')->getClientOriginalName();
            $chapitre->setVideo($x);
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_listechapitre', array('id' => $id));
        }

        $em1 = $this->getDoctrine()->getManager();
        $listeQuiz = $em1->getRepository('MoocMoocBundle:Quiz')->findBy(array('type'=>0));
        return $this->render('MoocMoocBundle:Chapitre:ajouterChapitre.html.twig', array('listeQuiz' => $listeQuiz,'id'=>$id));
    }


    public function modifierChapitreAction($id,$idcours,Request $request) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        if ($request->getMethod() == 'POST') {
            $chapitre->setTitre($request->get('titre'));
            $chapitre->setIdquiz($request->get('q'));
            $chapitre->setPresentation($request->files->get('presentation')->getClientOriginalName());
            $chapitre->setObjectif($request->get('objectif'));
            $chapitre->setVideo($request->files->get('video')->getClientOriginalName());
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
        return $this->redirectToRoute('mooc_mooc_listechapitre',array('id'=>$idcours));
        }
        $em1 = $this->getDoctrine()->getManager();
        $listeQuiz = $em1->getRepository('MoocMoocBundle:Quiz')->findBy(array('type'=>0));
        return $this->render('MoocMoocBundle:Chapitre:modifierChapitre.html.twig', array('listeQuiz' => $listeQuiz, 'chapitre' => $chapitre, 'idchapitre' => $id,'id'=>$idcours));
    }

    public function supprimerChapitreAction($id,$idcours) {
        $em = $this->getDoctrine()->getManager();
        $chapitre = $em->getRepository('MoocMoocBundle:Chapitre')->find($id);
        $em->remove($chapitre);
        $em->flush();
        return $this->redirectToRoute('mooc_mooc_listechapitre',array('id'=>$idcours));
    }

}
