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
        
        public function pdfAction($id)
        {
       $tab=array();
            $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocMoocBundle:Quiz')->find($id);

        $question = $em->getRepository('MoocMoocBundle:Question')->findBy(array('idquiz' => $id));
        foreach($question as $q)
        {
             $rep = $em->getRepository('MoocMoocBundle:Reponse')->findBy(array('idquestion'=>$q->getId(),'etat'=>1));
             array_push($tab, $rep);
        }
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('MoocMoocBundle:Cours:quizpdf.html.twig',array('quiz'=>$quiz,'rep'=>$tab));

        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');

        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $content = $html2pdf->Output('quiz.pdf', true);
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename=Quiz_Solution.pdf');
        return $response;


///////////////////////////:::
$loader->add('Html2Pdf_', __DIR__.'/../vendor/html2pdf/lib'); 
        }

    }
    

