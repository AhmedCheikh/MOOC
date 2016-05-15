<?php

namespace Avanzu\AdminThemeBundle\Controller;

use Avanzu\AdminThemeBundle\Form\FormDemoModelType;
use Avanzu\AdminThemeBundle\Model\FormDemoModel;
use Symfony\Component\HttpFoundation\Request;
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
        return $this->redirectToRoute('liste_organisme');
    }

    public function adminMailAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $emailto = $request->get('emailto');
            $subject = $request->get('subject');
            $Message = $request->get('Message');
        }
        
        $mailer = $this->get('mailer');
        $message = \Swift_Message::newInstance()
        ->setSubject($subject)
        ->setFrom('mooc.smart.dev@gmail.com')
        ->setTo($emailto)
        ->setBody($Message)
             ->addPart($Message);
        $mailer->send($message);
        
        return $this->redirectToRoute('avanzu_admin_dashboard');
    }
    
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function uiGeneralAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:index.html.twig');
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
        $repository1 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $liste = $repository1->findAll();
        $nbfnv = $repository1->nombreFormateurNonValide() ; 
        $nbonv = $repository2->nombreOrganismeNonValide() ; 
        
        return $this->render('AvanzuAdminThemeBundle:Default:Formateurs.html.twig',array('liste'=>$liste,'nbfnv'=>$nbfnv,'nbonv'=>$nbonv));
    }
    
    
    
    public function testAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Coursuivi');
        
        $nb = $repository->nombreCoursAndroidJanvier() ; 
         
        return $this->render('AvanzuAdminThemeBundle:Default:test.html.twig', array(
            'nb'=>$nb
        ));
    }
    
    
    
    
}
