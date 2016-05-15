<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Avanzu\AdminThemeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of OrganismeController
 *
 * @author WiKi
 */
class OrganismeController extends Controller {
    
    public function listeOrganismeAction() {
        $repository1 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        
        $nbfnv = $repository1->nombreFormateurNonValide() ; 
        $nbonv = $repository2->nombreOrganismeNonValide() ; 
        $em = $this->getDoctrine()->getManager();
        $listeOrganisme = $em->getRepository('MoocMoocBundle:Organisme')->findAll();
        return $this->render('AvanzuAdminThemeBundle:Default:Organismes.html.twig',array('listeOrganisme'=>$listeOrganisme,'nbfnv'=>$nbfnv,'nbonv'=>$nbonv));
    }
    
    public function listeOrganisme2Action() {
        $repository1 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        
        $nbfnv = $repository1->nombreFormateurNonValide() ; 
        $nbonv = $repository2->nombreOrganismeNonValide() ; 
        $em = $this->getDoctrine()->getManager();
        $listeOrganisme = $em->getRepository('MoocMoocBundle:Organisme')->findAll();
        return $this->render('AvanzuAdminThemeBundle:Default:Organismes2.html.twig',array('listeOrganisme'=>$listeOrganisme,'nbfnv'=>$nbfnv,'nbonv'=>$nbonv));
    }
    
    public function detailsOrganismeAction($id) {
        $repository1 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        
        $nbfnv = $repository1->nombreFormateurNonValide() ; 
        $nbonv = $repository2->nombreOrganismeNonValide() ; 
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $o = $repository->findByIdorganisme($id);
        $f = $repository1->findFormateurByIdOrganisme($id) ; 
        return $this->render('AvanzuAdminThemeBundle:Default:detailsOrganisme.html.twig', array(
            'o'=>$o,'nbfnv'=>$nbfnv,'nbonv'=>$nbonv,'f'=>$f));
    }
    
    public function printAction() {
        $em = $this->getDoctrine()->getManager();
        $listeOrganisme = $em->getRepository('MoocMoocBundle:Organisme')->findAll();
        return $this->render('AvanzuAdminThemeBundle:Default:print.html.twig',array('listeOrganisme'=>$listeOrganisme));
        
    }
    
    public function bloquerOrganismeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $em->getRepository('MoocMoocBundle:Organisme')->bloquerOrganisme($id);
        return $this->redirectToRoute('liste_organisme');
        
    }
    
    public function supprimerOrganismeAction($id){
        $em = $this->getDoctrine()->getManager();
        $o = $em->getRepository('MoocMoocBundle:Organisme')->find($id);
        $em->remove($o);
        $em->flush();
        return $this->redirectToRoute('liste_organisme');
    }
    
    public function validerOrganismeAction($id,$mail) {
        $em = $this->getDoctrine()->getManager();
        $em->getRepository('MoocMoocBundle:Organisme')->validerOrganisme($id);
        
        $mailer = $this->get('mailer');

    $message = \Swift_Message::newInstance()
        ->setSubject('Confirmation de votre inscription')
        ->setFrom('mooc.smart.dev@gmail.com')
        ->setTo($mail)
        ->setBody("Bonjour,")
             ->addPart('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0077)http://www.alsacreations.com/xmedia/tuto/email/responsive/email-template.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Template mailing Alsacreations</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    /* Fonts and Content */
    body, td { font-family:Arial, Helvetica, Geneva, sans-serif; font-size:14px; }
    body { background-color: #2A374E; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
    h2{ padding-top:12px; /* ne fonctionnera pas sous Outlook 2007+ */color:#0E7693; font-size:22px; }

    </style>
   
</head>
<body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:rgb(42, 55, 78)">
        <tbody>
            <tr>
                <td align="center" bgcolor="#2A374E">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>                            
                            <tr>
                                <td class="w640" width="640" height="10"></td>
                            </tr>

                            <tr>
                                <td align="center" class="w640" width="640" height="20"> <a style="color:#ffffff; font-size:12px;" href="http://www.alsacreations.com/xmedia/tuto/email/responsive/email-template.html#"><span style="color:#ffffff; font-size:12px;"></span></a> </td>
                            </tr>
                            <tr>
                                <td class="w640" width="640" height="10"></td>
                            </tr>


                            <!-- entete -->
                            <tr class="pagetoplogo">
                                <td class="w640" width="640">
                                    
                                </td>
                            </tr>

                            <!-- separateur horizontal -->
                            <tr>
                                <td class="w640" width="640" height="1" bgcolor="#d7d6d6"></td>
                            </tr>

                             <!-- contenu -->
                            <tr class="content">
                                <td class="w640" width="640" bgcolor="#ffffff">
                                    <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="w30" width="30"></td>
                                                <td class="w580" width="580">
                                                    <!-- une zone de contenu -->
                                                    <table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>                                                            
                                                            <tr>
                                                                <td class="w580" width="580">
                                                                    <h2 style="color:#0E7693; font-size:22px; padding-top:12px;">
                                                                       Inscription confirmée </h2>

                                                                    <div align="left" class="article-content">
                                                                        <p> Bonjour,</p>
                                                                        <p> L\'équipe Mooc vous informe que votre inscription à été confirmée, veuillez cliquer sur le lien ci-dessous afin de terminer votre inscription.
                                                                        </p>
                                                                        <p>
<h1><a href="http://localhost/Mooc_3A2_Web/web/app_dev.php/inscriptionOrganismeMail/'.$id.'"> Terminez votre inscription </a> </h1> 

<p>Merci !</p>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w580" width="580" height="1" bgcolor="#c7c5c5"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- fin zone -->                                                   

                                                    <!-- une autre zone de contenu -->
                                                    <table class="w580" width="580" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                           
                                                            <tr>
                                                                <td class="w275" width="275" valign="top">
                                                                    <div align="left" class="article-content">
                                                                      
                                                                    </div>
                                                                </td>
                                                                <td class="w30" width="30"></td>
                                                                <td class="w275" width="275" valign="top">
                                                                   
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" class="w580" height="1" bgcolor="#c7c5c5"></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                    <table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5">
                                                                   <h2 style="color:#0E7693; font-size:22px; padding-top:12px;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w180" width="180" valign="top">
                                                                    <div align="left" class="article-content">
                                                                    </div>
                                                                </td>

                                                                <td class="w20" width="20"></td>
                                                                <td class="w180" width="180" valign="top">
                                                                    <div align="left" class="article-content">
                                                                    </div>
                                                                </td>

                                                                <td class="w20" width="20"></td>
                                                                <td class="w180" width="180" valign="top">
                                                                    <div align="left" class="article-content">
                                                                       <p align="right">L\'équipe de gestion des comptes MOOC</p>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="5" class="w580" width="580" height="1" bgcolor="#c7c5c5"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td class="w30" width="30"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <!--  separateur horizontal de 15px de  haut-->
                            <tr>
                                <td class="w640" width="640" height="15" bgcolor="#ffffff"></td>
                            </tr>

                            <!-- pied de page -->
                            <tr class="pagebottom">
                                <td class="w640" width="640">
                                    <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#c7c7c7">
                                        <tbody>
                                            <tr>
                                                <td colspan="5" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td class="w30" width="30"></td>
                                                <td class="w580" width="580" valign="top">
                                                    <p align="right" class="pagebottom-content-left">
                                                    </p>
                                                </td>

                                                <td class="w30" width="30"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="w640" width="640" height="60"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

</body></html>', 'text/html')
            //->attach(Swift_Attachment::fromPath('my-document.pdf'))
    ;
    $mailer->send($message);

        
        return $this->redirectToRoute('liste_organisme2');
        
    }
     
    
}
