<?php

namespace Mooc\MoocBundle\Controller;

use ESPRIT\ParcBundle\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class CoursController extends Controller {

    public function affichecoursAction() {
         $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $listeCours = $repository->findAll();
       
        return $this->render('MoocMoocBundle:Cours:affichecours.html.twig',array('listeCours' => $listeCours));
    }
    
    public function testChercherAction($id) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $cours = $repository->find($id);
        if (NULL === $cours) {
            return new Response('Cours inéxistant !!');
        } else {
            $rep = $cours->getNomCours() . " Objectif :" .
                    $cours->getObjectif() . " CIN : " .
                    $cours->getCinformateur();
            return new Response($rep);
        }
    }
    
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
      
        $cours = $em->getRepository('MoocMoocBundle:Cours')->find($id);
        $cin= $cours->getCinformateur() ;
         
         $formateur = $em->getRepository('MoocMoocBundle:Formateur')->findOneBy(array('cin' => $cin));
        
        $em->remove($cours);
        $em->flush();
        $lstcours = $em->getRepository('MoocMoocBundle:Cours')->findAll();
         return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('Formateur' => $formateur, 'Lstcours' => $lstcours, 'cin' => $formateur->getCin()));
    }
    
     public function updateCoursAction($id) {

        return $this->render('MoocMoocBundle:Formateur:updateCours.html.twig', array('id' => $id));
    }
    
    
    public function testChercherCoursFormateurAction($cin)
    {
    $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $cours = $repository->findBy($cin);
       
            return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig',array('Cours' => $cours));
        }
    }
    

