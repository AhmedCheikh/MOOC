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
use Mooc\MoocBundle\Entity\Cours;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Form\ApprenantType;

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
        
        return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig',array('apprenant' =>$Apprenant ));
    }
    public function CoursApprenantAction($login) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        $query = $em->createQuery('select cs.idcoursuivi , c.idcours ,c.nomCours, c.description , c.difficulte, cs.note from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where cs.cinapprenant = :a and c.idcours = cs.idCours ')
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

                
//                return $this->redirect($this->generateUrl('mooc_mooc_acceuilformateur', array('name' => $formateur->getNom(), 'prenom' => $formateur->getPrenom())));
                //return $this->render('MoocMoocBundle:Apprenant:EspaceApprenant.html.twig', array('name' => $Apprenant->getNom(),'prenom'=>$Apprenant->getPrenom()));
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
                    //return $this->render('MoocMoocBundle:Apprenant:EspaceApprenant.html.twig', array('name' => $Apprenant->getNom(),'prenom'=>$Apprenant->getPrenom()));
                
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
        
        if ($request->getMethod() == 'POST') {
            $cin = $request->get('cin');
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');
            $avatar = 'defaut.jpg';
            $login = $request->get('login');
            $password = $request->get('password');

            $Apprenant = new Apprenant();
            $Apprenant->setCin($cin);
            $Apprenant->setNom($nom);
            $Apprenant->setPrenom($prenom);
            $Apprenant->setEmail($email);
            $Apprenant->setAvatar($avatar);
            $Apprenant->setLogin($login);
            $Apprenant->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($Apprenant);
            $em->flush();
        }
        return $this->render('MoocMoocBundle:Apprenant:InscriptionApprenant.html.twig');
    }
    
    Public function editerProfilAction($login ,Request $request){
        //$Apprenant = new Apprenant();
        $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('MoocMoocBundle:Apprenant');
            //$Apprenant = $repository->findOneBy(array('login' => $login));
            $Apprenant = $repository->findOneBy($login);
            
        
        if ($request->getMethod() == "POST"){
            
//            $query = $em->createQuery("update MoocMoocBundle:Apprenant p set p.cin = :a , p.nom = :b , p.prenom = :c , p.email = :d , p.login = :e where p.cin = :f")
//                            ->setParameter('a',$request->get('cin'))        
//                            ->setParameter('b',$request->get('nom'))
//                            ->setParameter('c',$request->get('prenom'))
//                            ->setParameter('d',$request->get('email'))
//                            ->setParameter('e',$request->get('login'))
//                            ->setParameter('f',$Apprenant->get('cin'));
//            $query->execute();
            $Apprenant->setCin($request->get('cin'));
            $Apprenant->setNom($request->get('nom'));
            $Apprenant->setPrenom($request->get('prenom'));
            $Apprenant->setEmail($request->get('email'));
            $Apprenant->setLogin($request->get('login'));
            $em1 = $this->getDoctrine()->getManager();
           
            $em1->persist($Apprenant);
            $em1->flush();
//            //return $this->redirectToRoute('mooc_accueil_apprenant');
            return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig', array('apprenant' => $Apprenant));
        
        }
        return $this->render('MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig', array('apprenant' => $Apprenant));
        
    }
    
    public function supprimerAction($id, $login){ 
        $em1 = $this->getDoctrine()->getManager();
        $repository = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        
        $em = $this->getDoctrine()->getManager(); 
        $Cour=$em->getRepository('MoocMoocBundle:Coursuivi')->find($id); 
        $em->remove($Cour); 
        $em->flush(); 
         $query = $em->createQuery('select cs.idcoursuivi , c.nomCours, c.description , c.difficulte, cs.note from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where cs.cinapprenant = :a and c.idcours = cs.idCours ')
                ->setParameter('a',$Apprenant->getCin());
            $Coursuivi=$query->getResult();
        return $this->render('MoocMoocBundle:Apprenant:CoursApprenant.html.twig',array('apprenant' =>$Apprenant ,'Coursuivi'=> $Coursuivi));
    }
    
    public function suivreCoursAction($login,$id,$id2){ 
        $em1 = $this->getDoctrine()->getManager();
        $repository = $em1->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        
        $em2 = $this->getDoctrine()->getManager();
        $repository = $em2->getRepository('MoocMoocBundle:Cours');
        $Cour = $repository->find($id);
        
        $Coursuivi = new Coursuivi();
        $Coursuivi->setCinapprenant($Apprenant);
        $Coursuivi->setIdCours($Cour);
        $Coursuivi->setAppreciation("bon");
        $Coursuivi->setCommentaire("vhgvj");
        $Coursuivi->setDateDebut(null);
        $Coursuivi->setNote(0);
         $em = $this->getDoctrine()->getManager();
         $em->persist($Coursuivi);
         $em->flush();
            
         $query = $em->createQuery('select cs.idcoursuivi , c.nomCours, c.description , c.difficulte, cs.note from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where cs.cinapprenant = :a and c.idcours = cs.idCours')
                ->setParameter('a',$Apprenant->getCin());
            $Coursuivi=$query->getResult();
        
        return $this->render('MoocMoocBundle:Apprenant:CoursApprenant.html.twig',array('apprenant' =>$Apprenant ,'Coursuivi'=> $Coursuivi));
    }
    
    public function ajoutAction(){ 
        $apprenant= new Apprenant(); 
        $form = $this->createForm(new ApprenantType(),$apprenant); 
        //$request= $this->getRequest(); 
        /*if ($request->getMethod()=="POST"){ 
            $form->bind($request); 
            if ($form->isValid()){ 
                $em = $this->container->get('Doctrine')->getEntityManager(); 
                $em->persist($livre); 
                $em->flush(); 
                return $this->render('MoocMoocBundle:Apprenant:ajout.html.twig', array('msg' => 'Ajout affectué avec succès')); 
                
            } 
            
        }*/ 
        return $this->render('MoocMoocBundle:Apprenant:ajout.html.twig', array('Form' => $form->createView())); 
    }
    
    public function consultAction($cours){ 
         $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Apprenant');
        $Apprenant = $repository->findOneBy(array('login' => $login));
        foreach ($res as $cours ) {
    

        
        return $this->render('MoocMoocBundle:Apprenant:CoursDetails.html.twig',array('apprenant' =>$Apprenant ,'Coursuivi'=> $res));
    }}
}
