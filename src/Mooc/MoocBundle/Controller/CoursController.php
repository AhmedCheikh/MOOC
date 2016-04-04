<?php

namespace Mooc\MoocBundle\Controller;

use ESPRIT\ParcBundle\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class CoursController extends Controller {

    public function affichecoursAction() {
         $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $listeCours = $repository->chercherTout();
       
        return $this->render('MoocMoocBundle:Cours:affichecours.html.twig',array('listeCours' => $listeCours));
    }
    
    public function testChercherAction($id) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $cours = $repository->chercher($id);
        if (NULL === $cours) {
            return new Response('Cours inéxistant !!');
        } else {
            $rep = $cours->getNomCours() . " Objectif :" .
                    $cours->getObjectif() . " CIN : " .
                    $cours->getCinformateur();
            return new Response($rep);
        }
    }

}
