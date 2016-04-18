<?php

namespace Avanzu\AdminThemeBundle\Controller;

use Avanzu\AdminThemeBundle\Form\FormDemoModelType;
use Avanzu\AdminThemeBundle\Model\FormDemoModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mooc\MoocBundle\Entity\Formateur;

/**
 * Class DefaultController
 *
 * @package Avanzu\AdminThemeBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dashboardAction() {
        $repositoryf = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $nbf = $repositoryf->nombreFormateur() ; 
        
        $repositoryc = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $nbc = $repositoryc->nombreCours() ;
        
        $repositoryo = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $nbo = $repositoryo->nombreOrganisme() ;
        
        $repositorya = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Apprenant');
        $nba = $repositorya->nombreApprenant() ;
        return $this->render('AvanzuAdminThemeBundle:Default:dashboard.html.twig', array('nbf'=>$nbf,'nbo'=>$nbo,'nba'=>$nba,'nbc'=>$nbc)); 
    }
    
    public function dashboard2Action() {
        $repositoryf = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $nbf = $repositoryf->nombreFormateur() ; 
        
        $repositoryc = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $nbc = $repositoryc->nombreCours() ;
        
        $repositoryo = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $nbo = $repositoryo->nombreOrganisme() ;
        
        $repositorya = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Apprenant');
        $nba = $repositorya->nombreApprenant() ;
        return $this->render('AvanzuAdminThemeBundle:Default:dashboard.html.twig', array('nbf'=>$nbf,'nbo'=>$nbo,'nba'=>$nba,'nbc'=>$nbc)); 
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function uiGeneralAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:index.html.twig');
    }
    
    public function listeOrganismeAction() {
        $em = $this->getDoctrine()->getManager();
        $listeOrganisme = $em->getRepository('MoocMoocBundle:Organisme')->findAll();
        return $this->render('AvanzuAdminThemeBundle:Default:Organismes.html.twig',array('listeOrganisme'=>$listeOrganisme));
    }

    public function uiIconsAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:index.html.twig');
    }

    public function formAction() {
        $form =$this->createForm( FormDemoModelType::class );
        return $this->render('AvanzuAdminThemeBundle:Default:form.html.twig', array(
                'form' => $form->createView()
            ));
    }

    public function loginAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:login.html.twig');
    }
    
    public function formateurAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:Formateurs.html.twig');
    }
    
    public function chartsAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        
        
        $nband = $repository-> nombreCoursAndroid() ; 
        $nbiOS = $repository-> nombreCoursiOS() ; 
        $nbJ2ME = $repository-> nombreCoursJ2ME() ; 
        $nbWP = $repository-> nombreCoursWP() ; 
        return $this->render('AvanzuAdminThemeBundle:Default:charts.html.twig', array(
            'nband'=>$nband,
            'nbiOS'=>$nbiOS,
            'nbJ2ME'=>$nbJ2ME,
            'nbWP'=>$nbWP
        ));
    }
    
    public function testAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        
        $liste = $repository->testDonut() ; 
         
        return $this->render('AvanzuAdminThemeBundle:Default:test.html.twig', array(
            'liste'=>$liste
        ));
    }
}
