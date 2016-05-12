<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Mooc\MoocBundle\Entity\Comite;

/**
 * Description of AdminController
 *
 * @author WiKi
 */
class ComiteController extends Controller {
    
    public function loginComiteAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Comite');
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $login = $request->get('login');
            $password = $request->get('password');
            $remember = $request->get('remb');

            //        $login = 'zidaine';
            //        $password = '123';

            $comite = $repository->findOneBy(array('login' => $login, 'password' => $password));
            if ($comite) {
                if ($remember == "remb") {
                    $logincomite = new LoginComite();
                    $logincomite->setPassword($login);
                    $logincomite->setPassword($password);
                    $session->set('logincomite', $logincomite);
                    $session->start();
                }
//                
                return $this->redirect($this->generateUrl('easyadmin', array('Comite' => $comite, 'login' => $comite->getLogin())));
               
            } else {
                return $this->render('MoocMoocBundle:Comite:loginComite.html.twig', array('nom' => 'Authentification échoué'));
            }
        } else {
            if ($session->has('loginComite')) {
                $loginComite = $session->get('loginComite');
                $login = $loginComite->getLogin();
                $password = $loginComite->getPassword();
                $comite = $repository->findOneBy(array('login' => $login, 'password' => $password));
                if ($comite) {
                    return $this->render('JavierGuiluzEasyadmin-bundle:Default:listd.html.twig');
                }
            }
            return $this->render('MoocMoocBundle:Comite:loginComite.html.twig');
        }
    }
}

