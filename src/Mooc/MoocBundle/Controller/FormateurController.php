<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Formateur;
use Mooc\MoocBundle\Modals\LoginFormateur;

/**
 * Description of FormateurController
 *
 * @author akoubi
 */
class FormateurController extends Controller {

    public function afficheformateurAction() {

        return $this->render('MoocMoocBundle:Formateur:afficheformateur.html.twig');
    }
    
    public function acceuilformateurAction() {

        return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig');
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
                return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('name' => $formateur->getNom(),'prenom'=>$formateur->getPrenom()));
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
                   return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('name' => $formateur->getNom(),'prenom'=>$formateur->getPrenom()));  
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
    
}
