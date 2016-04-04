<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Formateur;
use Mooc\MoocBundle\Modals\LoginFormateur;
use Mooc\MoocBundle\Entity\Cours;

/**
 * Description of FormateurController
 *
 * @author akoubi
 */
class FormateurController extends Controller {

    public function afficheformateurAction() {

        return $this->render('MoocMoocBundle:Formateur:afficheformateur.html.twig');
    }

    public function acceuilformateurAction($prenom, $name) {

//              $url = $request->getUri();
//              if ($url == 'http://localhost/Mooc_Web/web/app_dev.php/acceuilformateur') {
//              return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig');
//              }
        return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('name' => $name, 'prenom' => $prenom));
    }

    public function loginformateurAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $login = $request->get('login');
            $password = $request->get('password');
            $remember = $request->get('remember');

            //        $login = 'zidaine';
            //        $password = '123';

            $formateur = $repository->findOneBy(array('login' => $login, 'password' => $password));
            if ($formateur) {
                if ($remember == 'remember-me') {
                    $loginformateur = new LoginFormateur();
                    $loginformateur->setPassword($login);
                    $loginformateur->setPassword($password);
                    $session->set('loginformateur', $loginformateur);
                }


                return $this->redirect($this->generateUrl('mooc_mooc_acceuilformateur', array('name' => $formateur->getNom(), 'prenom' => $formateur->getPrenom())));
//                return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('name' => $formateur->getNom(),'prenom'=>$formateur->getPrenom()));
            } else {
                return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig', array('name' => 'Authentification échoué'));
            }
        } else {
            if ($session->has('loginformateur')) {
                $loginformateur = $session->get('loginformateur');
                $login = $loginformateur->getLogin();
                $password = $loginformateur->getPassword();
                $formateur = $repository->findOneBy(array('login' => $login, 'password' => $password));
                if ($formateur) {
                    return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('name' => $formateur->getNom(), 'prenom' => $formateur->getPrenom()));
                }
            }
            return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig');
        }
    }

    public function inscriptionformateurAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $cin = $request->get('cin');
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');
            $etat = 0;
            $avatar = 'defaut.jpg';
            $cv = 'cv';
            $login = $request->get('login');
            $password = $request->get('password');

            $formateur = new Formateur();
            $formateur->setCin($cin);
            $formateur->setNom($nom);
            $formateur->setPrenom($prenom);
            $formateur->setEmail($email);
            $formateur->setEtat($etat);
            $formateur->setAvatar($avatar);
            $formateur->setCv($cv);
            $formateur->setLogin($login);
            $formateur->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($formateur);
            $em->flush();
        }
        return $this->render('MoocMoocBundle:Formateur:inscriptionformateur.html.twig');
    }

    public function logoutformateurAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig');
    }

    public function publiercourAction(Request $request,$prenom,$name) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $frm = $repository->findOneBy(array('nom' => $name, 'prenom' => $prenom));
        if ($request->getMethod() == 'POST') {
            
            $nom_cours = $request->get('nom_cours');
            $cinformateurIndex = $request->get('cinformateurIndex');
            $idQuizIndex = $request->get('idQuizIndex');
            $description = $request->get('description');
            $difficulte = $request->get('difficulte');
            $objectif = $request->get('objectif');
            $video = $request->get('video');
            $etatVideo = $request->get('etatVideo');
            
            $cour = new Cours();
            
            $cour->setNomCours($nomCours);
            $cour->setCinformateur($cinformateur);
            $cour->setIdquiz($idQuizIndex);
            $cour->setDescription($description);
            $cour->setDifficulte($difficulte);
            $cour->setVideo($video);
            $cour->setVideo($video);
            $cour->setEtatvideo($etatvideo);

            
            $em->persist($cour);
            $em->flush();
        }
        return $this->render('MoocMoocBundle:Formateur:publiercour.html.twig', array('name' => $frm->getNom(), 'prenom' => $frm->getPrenom()));

    }
    
    public function listecourformateurAction($prenom,$name) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $frm = $repository->findOneBy(array('nom' => $name, 'prenom' => $prenom));
        
        return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('name' => $frm->getNom(), 'prenom' => $frm->getPrenom()));

    }

}
