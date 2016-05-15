<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mooc\MoocBundle\Entity\Apprenant;
use Mooc\MoocBundle\Entity\Coursuivi;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Mooc\MoocBundle\Modals\Document;
use Mooc\MoocBundle\Modals\LoginFormateur;

//use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
/**
 * Description of ApprenantController
 *
 * @author Khoubaib
 */
class ApprenantController extends Controller {
    
    
    public function EspaceApprenantAction() {

        return $this->render('MoocMoocBundle:Apprenant:EspaceApprenant.html.twig');
    }
    
    public function acceuilApprenantAction($login) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        
        return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig',array('apprenant' =>$Apprenant, 'msg'=> '' ));
    }
    public function CoursApprenantAction($login) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        $query = $em->createQuery('select cs.idcoursuivi , c.nomCours, c.description , c.difficulte, cs.note , cs.dateDebut from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where cs.cinapprenant = :a and c.idcours = cs.idCours ')
                ->setParameter('a',$Apprenant->getCin());
            $Coursuivi=$query->getResult();

        return $this->render('MoocMoocBundle:Apprenant:CoursApprenant.html.twig',array('apprenant' =>$Apprenant ,'Coursuivi'=> $Coursuivi));
    }
    public function ChercherCoursApprenantAction($login , Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        $Cours= null;
        if ($request->getMethod()=="POST"){
            $query = $em->createQuery('select c.idcours , c.nomCours, f.nom ,f.prenom , c.difficulte from MoocMoocBundle:Formateur f ,MoocMoocBundle:Cours c where c.cinformateur = f.cin and c.nomCours like :p ')
                    ->setParameter('p','%'.$request->get('Chercher').'%');
            $Cours=$query->getResult();
            return $this->render('MoocMoocBundle:Apprenant:ChercherCours.html.twig',array('apprenant' =>$Apprenant , 'Cours'=>$Cours ));
        }
       
        return $this->render('MoocMoocBundle:Apprenant:ChercherCours.html.twig',array('apprenant' =>$Apprenant , 'Cours'=>$Cours ));
    }
    
    public function loginApprenantAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $login = $request->get('login');
            $password = $request->get('password');
            $remember = $request->get('remember');

            $Apprenant = $repository->findOneBy(array('login' => $login, 'password' => $password));
            if ($Apprenant) {
                if ($remember == 'remember-me') {
                    $loginApprenant = new LoginFormateur();
                    $loginApprenant->setLogin($login);
                    $loginApprenant->setPassword($password);
                    $session->set('loginApprenant', $loginApprenant);
                }

                return $this->render('MoocMoocBundle:Apprenant:EspaceApprenant.html.twig', array('apprenant' => $Apprenant));
            } else {
                return $this->render('MoocMoocBundle:Apprenant:loginApprenant.html.twig', array('name' => 'Authentification échoué'));
            }
        } else {
            if ($session->has('loginApprenant')) {
                $loginApprenant = $session->get('loginApprenant');
                $login = $loginApprenant->getLogin();
                $password = $loginApprenant->getPassword();
                $Apprenant = $repository->findOneBy(array('login' => $login, 'password' => $password));
                if ($Apprenant) {
                    
                    return $this->render('MoocMoocBundle:Apprenant:EspaceApprenant.html.twig', array('apprenant' => $Apprenant));
                }
            }
            return $this->render('MoocMoocBundle:Apprenant:loginApprenant.html.twig');
        }
    }
    public function logoutApprenantAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('MoocMoocBundle:Apprenant:loginApprenant.html.twig');
    }

    public function inscriptionApprenantAction(Request $request) {
            $msg ="";
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('MoocMoocBundle:Apprenant');
            $test1 = $repository->findOneBy(array('cin' => $request->get('cin')));
            $test2 = $repository->findOneBy(array('login' => $request->get('login')));
            if($test1){
                $msg ="Cin Utilisé";
                return $this->render('MoocMoocBundle:Apprenant:InscriptionApprenant.html.twig',array('msg'=>$msg));
            }
            else if($test2){
                $msg ="Login Utilisé";
                return $this->render('MoocMoocBundle:Apprenant:InscriptionApprenant.html.twig',array('msg'=>$msg));
            }else{
            
            $cin = $request->get('cin');
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');

            $login = $request->get('login');
            $password = $request->get('password');
            $avatar = $request->files->get('avatar');
            
            $Apprenant = new Apprenant();

            if (($avatar instanceof UploadedFile) && ($avatar->getError() == '0')) {
                if (($avatar->getSize() < 2000000000)) {
                    $originalName = $avatar->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        $document = new Document();
                        $document->setFile($avatar);
                        $document->setSubDirectory('uploads');
                        $document->processFile();

                            $Apprenant->setCin($cin);
                            $Apprenant->setNom($nom);
                            $Apprenant->setPrenom($prenom);
                            $Apprenant->setEmail($email);
                            $Apprenant->setAvatar($originalName);
                            $Apprenant->setLogin($login);
                            $Apprenant->setPassword($password);

                            $em = $this->getDoctrine()->getManager();
                            $em->persist($Apprenant);
                            $em->flush();
                        
                    } 
                }
            } 
            
        }
           return $this->render('MoocMoocBundle:Apprenant:loginApprenant.html.twig');
        } else {

            return $this->render('MoocMoocBundle:Apprenant:InscriptionApprenant.html.twig',array('msg'=>$msg));
        }
    
    }
 
    Public function editerProfilAction(Request $request){
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('MoocMoocBundle:Apprenant');
            $Apprenant = $repository->findOneBy(array('login' => $request->get('login')));
            $msg='Les modification sont pris en compte avec succès';
        if ($request->getMethod() == 'POST'){
            
            $Apprenant->setNom($request->get('nom'));
            $Apprenant->setPrenom($request->get('prenom'));
            $Apprenant->setEmail($request->get('email'));
            $em1 = $this->getDoctrine()->getManager();
            $em1->persist($Apprenant);
            $em1->flush();
                    
            return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig', array('apprenant' => $Apprenant,'msg'=>$msg));
        
            }
       return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig', array('apprenant' => $Apprenant,'msg'=>$msg));
        
    }
    
    public function editPasswordAction(Request $request) {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('MoocMoocBundle:Apprenant');
            $Apprenant = $repository->findOneBy(array('login' => $request->get('login')));
          $msg='';
        if ($request->getMethod() == 'POST'){
            if($Apprenant->getPassword() == $request->get('passwordActuelle')){
                $Apprenant->setPassword($request->get('nouveauPassword'));
                $em->persist($Apprenant);
                $em->flush();
                $msg='Les modification sont pris en compte avec succès';
                return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig', array('apprenant' => $Apprenant,'msg'=>$msg));
            }else{
                 $msg='Les modification ne sont pas pris en compte';
                 return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig', array('apprenant' => $Apprenant, 'msg'=>$msg));
            }
                
            return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig', array('apprenant' => $Apprenant));
        
            }
   }
    
    public function supprimerAction(Request $request){ 
        $em1 = $this->getDoctrine()->getManager();
        $repository = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $request->get('login')));
        
        $em = $this->getDoctrine()->getManager(); 
        $Cour=$em->getRepository('MoocMoocBundle:Coursuivi')->find($request->get('idCourSuivi')); 
        $em->remove($Cour); 
        $em->flush(); 
         $query = $em->createQuery('select cs.idcoursuivi , c.nomCours, c.description , c.difficulte, cs.note, cs.dateDebut from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where cs.cinapprenant = :a and c.idcours = cs.idCours ')
                ->setParameter('a',$Apprenant->getCin());
            $Coursuivi=$query->getResult();
        return $this->render('MoocMoocBundle:Apprenant:CoursApprenant.html.twig',array('apprenant' =>$Apprenant ,'Coursuivi'=> $Coursuivi));
    }
    
    public function suivreCoursAction(Request $request){ 
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository1->findOneBy(array('login' => $request->get('login')));
        
        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Cours');
        $Cour = $repository2->find($request->get('idCours'));
        
        $em3 = $this->getDoctrine()->getManager();
        $repository3 = $em3->getRepository('MoocMoocBundle:Coursuivi');
        $c = $repository3->findBy(array('cinapprenant' => $Apprenant->getCin(), 'idCours' => $request->get('idCours')));
        
        if($c == null) {
        
        $Coursuivi = new Coursuivi();
        $Coursuivi->setCinapprenant($Apprenant);
        $Coursuivi->setIdCours($Cour);
        $Coursuivi->setAppreciation(null);
        $Coursuivi->setCommentaire(null);
        $date = date("Y-m-d");
        $Coursuivi->setDateDebut($date);
        $Coursuivi->setNote(null);
         $em4 = $this->getDoctrine()->getManager();
         $em4->persist($Coursuivi);
         $em4->flush();
        }
        
         $em = $this->getDoctrine()->getManager();  
         $query = $em->createQuery('select cs.idcoursuivi , c.nomCours, c.description , c.difficulte, cs.note, cs.dateDebut from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where cs.cinapprenant = :a and c.idcours = cs.idCours')
                ->setParameter('a',$Apprenant->getCin());
            $Coursuivi=$query->getResult();
        
        return $this->render('MoocMoocBundle:Apprenant:CoursApprenant.html.twig',array('apprenant' =>$Apprenant ,'Coursuivi'=> $Coursuivi));
    }

    
    public function editCoursApprenantAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $request->get('login')));
        
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Coursuivi');
        $coursuivi = $repository1->findOneBy(array('idcoursuivi' => $request->get('id')));
        
        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Cours');
        
        $Cours = $repository2->findOneBy(array('idcours' => $coursuivi->getIdCours()));
        $chapitre=$em->getRepository('MoocMoocBundle:Chapitre')->findBy(array('idcours'=>$Cours)); 
        
        if ($request->getMethod() == 'POST'){
          if ($request->get('appreciation') <> 0 )   {
             $coursuivi->setAppreciation($request->get('appreciation'));
             $coursuivi->setCommentaire($request->get('commentaire'));
          }
          $coursuivi->setCommentaire($request->get('commentaire'));
          
            $em3 = $this->getDoctrine()->getManager();
            $em3->persist($coursuivi);
            $em3->flush();
          
            return $this->render('MoocMoocBundle:Apprenant:CoursDetail.html.twig',array('apprenant' =>$Apprenant ,'cours'=> $Cours ,'coursuivi'=> $coursuivi,'chapitre'=>$chapitre));
    }
   
  }
  
  public function detailCoursApprenantAction($idCourSuivi,$login) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Coursuivi');
        $coursuivi = $repository1->findOneBy(array('idcoursuivi' => $idCourSuivi));
        
        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Cours');
        
        $Cours = $repository2->findOneBy(array('idcours' => $coursuivi->getIdCours()));
        $chapitre=$em->getRepository('MoocMoocBundle:Chapitre')->findBy(array('idcours'=>$Cours)); 
        
        return $this->render('MoocMoocBundle:Apprenant:CoursDetail.html.twig',array('apprenant' =>$Apprenant ,'cours'=> $Cours ,'coursuivi'=> $coursuivi,'chapitre'=>$chapitre));
    }
    
}
