<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Mooc\MoocBundle\Entity\Organisme;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of MailController
 *
 * @author Rimy Jeljeli
 */
class MailController  extends Controller {

    
     public function PassOublierAction() {

        return $this->render('MoocMoocBundle:Mail:PassOublie.html.twig');
    }
     
     public function ModifPasswordAction($name) {

        return $this->render('MoocMoocBundle:Mail:modifPassword.html.twig',array('name' => $name));
    }
    public function SendAction(Request $request)
{
         if ($request->getMethod() == 'POST') {

         $name= $request->get('name');}
         $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));
        $email=$Organisme->getEmail();
    

    // get the mailer first (mandatory to initialize Swift Mailer)
    $mailer = $this->get('mailer');

    $message = \Swift_Message::newInstance()
        ->setSubject('Recuperation Mot de passe')
        ->setFrom('mooc.smart.dev@gmail.com')
        ->setTo($email)
        ->setBody("Bonjour Mr,")
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
                                <td align="center" class="w640" width="640" height="20"> <a style="color:#ffffff; font-size:12px;" href="http://www.alsacreations.com/xmedia/tuto/email/responsive/email-template.html#"><span style="color:#ffffff; font-size:12px;">Voir le contenu de ce mail en ligne</span></a> </td>
                            </tr>
                            <tr>
                                <td class="w640" width="640" height="10"></td>
                            </tr>


                            <!-- entete -->
                            <tr class="pagetoplogo">
                                <td class="w640" width="640">
                                    <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#F2F0F0">
                                        <tbody>
                                            <tr>
                                                <td class="w30" width="30"></td>
                                                <td class="w580" width="580" valign="middle" align="left">
                                                    <div class="pagetoplogo-content">
                                                        <img class="w580" style="text-decoration: none; display: block; color:#476688; font-size:30px;" src="./web/bundles/moocmooc/images/logo.png" alt="Mon Logo" width="482" height="108">
                                                    </div>
                                                </td> 
                                                <td class="w30" width="30"></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                                                       Réinitialisation de mot de passe </h2>

                                                                    <div align="left" class="article-content">
                                                                        <p> Cher/Chère...,</p>
                                                                        <p>Vous avez demandé la réinitialisation de votre mot de passe. Cliquez sur le lien ci-dessous. Vous allez être redirigé(e) vers une page du site Web Mooc sur laquelle vous pourrez changer votre mot de passe.
                                                                        </p>
                                                                        <p>
<h1><a href="http://localhost/Mooc_Web/web/app_dev.php/ModifPassword/'.$name.'"> Réinitialiser le mot de passe</a> </h1> 
<p>Ce lien expirera dans une journée et ne peut être utilisé qu"une seule fois.</p>
<p>Merci !</p>
<p>L"équipe de gestion des comptes MOOC</p>
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
                                                                        <p><img class="w180" width="180" src="./Template mailing Alsacreations_files/kitten.jpg" alt="un chaton"></p>
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

 return $this->render('MoocMoocBundle:Mail:msgVerifMail.html.twig');}
  
//     public function CodeConfirmeAction() {
// if ($request->getMethod() == 'POST') {
//
//            $code = $request->get('code');
//            
// return new Response('ok');    }
// else {
//        return new Response('Pas ok'); 
  
 
    public function modifPassAction(Request $request,$name) {
          $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));
          if ($request->getMethod() == 'POST') {

         $password= $request->get('pass1');
           $Organisme->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Organisme);
            $em->flush();
          }

          
        return $this->render('MoocMoocBundle:Organisme:loginOrganisme.html.twig');}
  
 
    
}
    

