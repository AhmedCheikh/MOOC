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
use Mooc\MoocBundle\Entity\Admin;

/**
 * Description of AdminController
 *
 * @author WiKi
 */
class AdminController extends Controller {
    
    public function loginAdminAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Admin');
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $login = $request->get('login');
            $password = $request->get('password');
            $remember = $request->get('remb');

            //        $login = 'zidaine';
            //        $password = '123';

            $admin = $repository->findOneBy(array('login' => $login, 'password' => $password));
            if ($admin) {
                if ($remember == "remb") {
                    $loginadmin = new LoginAdmin();
                    $loginadmin->setPassword($login);
                    $loginadmin->setPassword($password);
                    $session->set('loginadmin', $loginadmin);
                    $session->start();
                }
//                
                return $this->redirect($this->generateUrl('avanzu_admin_dashboard', array('Admin' => $admin, 'login' => $admin->getLogin())));
               
            } else {
                return $this->render('MoocMoocBundle:Admin:loginAdmin.html.twig', array('nom' => 'Authentification échoué'));
            }
        } else {
            if ($session->has('loginAdmin')) {
                $loginAdmin = $session->get('loginAdmin');
                $login = $loginAdmin->getLogin();
                $password = $loginAdmin->getPassword();
                $admin = $repository->findOneBy(array('login' => $login, 'password' => $password));
                if ($admin) {
                    return $this->render('AvanzuAdminThemeBundle:Default:dashboard.html.twig');
                }
            }
            return $this->render('MoocMoocBundle:Admin:loginAdmin.html.twig');
        }
    }
}
