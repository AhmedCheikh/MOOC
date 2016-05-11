<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Organisme;
use Mooc\MoocBundle\Entity\Invitation;
use Mooc\MoocBundle\Entity\FormateurRepository;
use Mooc\MoocBundle\Modals\LoginOrganisme;

/**
 * Description of OrganismeController
 *
 * @author Rimy Jeljeli
 */
class OrganismeController extends Controller {

    public function listeOrganismeAction() {

        return $this->render('MoocMoocBundle:Organisme:listeOrganisme.html.twig');
    }
      public function TestAction() {
$date = new DateTime();
        return $this->render('MoocMoocBundle:Organisme:listeOrganisme.html.twig');
    }

    public function PreinscriptionOrganismeEnregAction(Request $request) {
        if ($request->getMethod() == 'POST') {

            $nom = $request->get('nom');
            $adresse = $request->get('adresse');
            $email = $request->get('email');
            $complete = 0;
            $login = $request->get('login');
            $password = $request->get('password');

            $Organisme = new Organisme();

            $Organisme->setNom($nom);
            $Organisme->setAdresse($adresse);
            $Organisme->setEmail($email);
            $Organisme->setComplete($complete);
            $Organisme->setLogin($login);
            $Organisme->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($Organisme);
            $em->flush();
        }
        return $this->render('MoocMoocBundle:Organisme:messageInscrit.html.twig');
    }

    public function inscriptionOrganismeAction($id, Request $request) {
        if ($request->getMethod() == 'POST') {

            $siteweb = $request->get('siteWeb');
            $telephone = $request->get('telephone');
            $description = $request->get('description');
            $complete = 1;

            $Organisme = $em->getRepository('MoocMoocBundle:Organisme')->find($id);

            $Organisme->setSiteweb($siteweb);
            $Organisme->setTelephone($telephone);
            $Organisme->setDescription($description);
            $Organisme->setComplete($complete);

            $em = $this->getDoctrine()->getManager();
            $em->persist($Organisme);
            $em->flush();
        }
        return $this->render('MoocMoocBundle:Organisme:InscriptionOrganisme.html.twig');
    }

    public function loginOrganismeAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $login = $request->get('login');
            $password = $request->get('password');
            $remember = $request->get('remember');

            $Organisme = $repository->findOneBy(array('login' => $login, 'password' => $password));
            if ($Organisme) {
                if ($remember == 'remember-me') {
                    $loginOrganisme = new LoginOrganisme();
                    $loginOrganisme->setPassword($login);
                    $loginOrganisme->setPassword($password);
                    $session->set('loginOrganisme', $loginOrganisme);
                }
                $repository2 = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('MoocMoocBundle:Organisme');
                $nbr = $repository2->nombreInvit($Organisme->getNom());

                return $this->redirect($this->generateUrl('mooc_mooc_acceuilOrganisme', array('name' => $Organisme->getNom(), 'nbr' => $nbr)));
//                return $this->render('MoocMoocBundle:Organisme:acceuilOrganisme.html.twig', array('name' => $Organisme->getNom()));
            } else {
                return $this->render('MoocMoocBundle:Organisme:loginOrganisme.html.twig', array('name' => 'Authentification échoué'));
            }
        } else {
            if ($session->has('loginOrganisme')) {
                $loginOrganisme = $session->get('loginOrganisme');
                $login = $loginOrganisme->getLogin();
                $password = $loginOrganisme->getPassword();
                $Organisme = $repository->findOneBy(array('login' => $login, 'password' => $password));
                if ($Organisme) {
                    return $this->render('MoocMoocBundle:Organisme:acceuilOrganisme.html.twig', array('name' => $Organisme->getNom()));
                }
            }
            return $this->render('MoocMoocBundle:Organisme:loginOrganisme.html.twig');
        }
    }

    public function acceuilOrganismeAction($name) {

        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $nbr = $repository2->nombreInvit($name);

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Invitation');

        $listeInvitation = $repository->chercherInvit($name, 0);
        return $this->render('MoocMoocBundle:Organisme:acceuilOrganisme.html.twig', array('name' => $name, 'nbr' => $nbr, 'listeInvitation' => $listeInvitation));
    }

    public function profileOrganismeAction($name, $nbr) {
        
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));





        return $this->render('MoocMoocBundle:Organisme:ProfilOrganisme.html.twig', array('Organisme' => $Organisme, 'nbr' => $nbr));
    }

    public function listeFormateursAction($name) {


        return $this->render('MoocMoocBundle:Organisme:listeFormateurs.html.twig', array('name' => $name));
    }

    public function profileAutreOrganismeAction($name, $name2, $nbr) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Organisme');
        $Organisme2 = $repository2->findOneBy(array('nom' => $name2));

        return $this->render('MoocMoocBundle:Organisme:ProfilAutreOrganisme.html.twig', array('Organisme' => $Organisme, 'Organisme2' => $Organisme2, 'nbr' => $nbr));
    }

    public function ListeFormateurs1Action($name, $nbr) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));
        $id = $Organisme->getIdorganisme();
        $em = $this->getDoctrine()->getManager();
        $listeFormateur = $em->getRepository('MoocMoocBundle:Formateur')->findBy(array('Organisme' => $id));


        return $this->render('MoocMoocBundle:Organisme:ListeFormateurs1.html.twig', array('listeFormateur' => $listeFormateur, 'Organisme' => $Organisme, 'nbr' => $nbr));
    }

    public function ListeTousFormateursAction($name, $nbr) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));

     $query = $em->createQuery('select  f.cin ,f.nom ,f.prenom,f.email from MoocMoocBundle:Formateur f where   f.Organisme <> :i ')
               ->setParameter('i',$Organisme->getIdorganisme());
           $listeFormateurs=$query->getResult();
//        $em1 = $this->getDoctrine()->getManager();
//        $listeFormateurs = $em->getRepository('MoocMoocBundle:Formateur')->findAll();
        return $this->render('MoocMoocBundle:Organisme:ListeTousFormateurs.html.twig', array('listeFormateur' => $listeFormateurs, 'Organisme' => $Organisme, 'nbr' => $nbr));
    }

    public function ListeOrganismes1Action($name, $nbr) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));

        $em = $this->getDoctrine()->getManager();
        $listeOrganismes = $em->getRepository('MoocMoocBundle:Organisme')->findAll();


        return $this->render('MoocMoocBundle:Organisme:ListeOrganisme1.html.twig', array('listeOrganismes' => $listeOrganismes, 'Organisme' => $Organisme, 'nbr' => $nbr));
    }

    public function modifierPasswordOrganismeAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Organisme = $em->getRepository('MoocMoocBundle:Organisme')->find($id);
        if ($request->getMethod() == 'POST') {
            $Organisme->setPassword($request->get('password'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($Organisme);
            $em->flush();
            return $this->redirectToRoute('mooc_mooc_profileOrganisme');
        }

        return $this->render('MoocMoocBundle:Organisme:ProfileOrganisme.html.twig', array('Organisme' => $Organisme));
    }

    public function ChercherFormateurAction($name, $nbr, Request $request) {
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository1->findOneBy(array('nom' => $name));
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $nbr = $repository2->nombreInvit($Organisme->getNom());
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));
        $listeFormateur = null;
        if ($request->getMethod() == "POST") {
            $query = $em->createQuery('select  f.cin ,f.nom ,f.prenom,f.email from MoocMoocBundle:Formateur f where  f.nom like :p and f.Organisme = :i ')
            ;
            $query->setParameters(array('p' => '%' . $request->get('Chercher') . '%', 'i' => $Organisme->getIdorganisme()));
            $listeFormateur = $query->getResult();
            return $this->render('MoocMoocBundle:Organisme:ListeFormateurs1.html.twig', array('listeFormateur' => $listeFormateur, 'Organisme' => $Organisme, 'nbr' => $nbr));
        }

        return $this->render('MoocMoocBundle:Organisme:ListeFormateurs1.html.twig', array('listeFormateur' => $listeFormateur, 'Organisme' => $Organisme, 'nbr' => $nbr));
    }

    public function ChercherFormateur2Action($name, $nbr, Request $request) {
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository1->findOneBy(array('nom' => $name));
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $nbr = $repository2->nombreInvit($Organisme->getNom());
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));
        $listeFormateur = null;
        if ($request->getMethod() == "POST") {
            $query = $em->createQuery('select  f.cin ,f.nom ,f.prenom,f.email from MoocMoocBundle:Formateur f where  f.nom like :p ')
                    ->setParameter('p', '%' . $request->get('Chercher') . '%');
            $listeFormateur = $query->getResult();
            return $this->render('MoocMoocBundle:Organisme:ListeTousFormateurs.html.twig', array('listeFormateur' => $listeFormateur, 'Organisme' => $Organisme, 'nbr' => $nbr));
        }

        return $this->render('MoocMoocBundle:Organisme:ListeFormateurs1.html.twig', array('listeFormateur' => $listeFormateur, 'Organisme' => $Organisme, 'nbr' => $nbr));
    }

    public function supprimerAction($cin, $name, $nbr) {
        $em = $this->getDoctrine()->getManager();
        $Formateur = $em->getRepository('MoocMoocBundle:Formateur')->findOneBy(array('cin' => $cin));
        $em->remove($Formateur);
        $em->flush();
        return $this->redirectToRoute('mooc_mooc_ListeFormateurs1', array('name' => $name, 'nbr' => $nbr));
    }

    public function supprimerInvitAction($id, $name, $nbr) {
        $em = $this->getDoctrine()->getManager();
        $Invitation = $em->getRepository('MoocMoocBundle:Invitation')->findOneBy(array('id' => $id));
        $em->remove($Invitation);
        $em->flush();
        $em3 = $this->getDoctrine()->getManager();
        $repository3 = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository3->findOneBy(array('nom' => $name));
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Invitation');
        $listeInvitation = $repository2->chercherInvit($Organisme->getNom(), 0);


        return $this->redirectToRoute('mooc_mooc_ListeInvit', array('listeInvitation' => $listeInvitation, 'name' => $name, 'nbr' => $nbr));
    }

    public function profileFormateurAction($cin, $name) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $Formateur = $repository->findOneBy(array('cin' => $cin));
        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository1->findOneBy(array('nom' => $name));

        return $this->render('MoocMoocBundle:Organisme:ProfilFormateur.html.twig', array('Organisme' => $Organisme, 'Formateur' => $Formateur));
    }

    public function ListeInvitAction($name, $nbr) {


        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Invitation');

        $listeInvitation = $repository->chercherInvit($name, 0);

        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository1->findOneBy(array('nom' => $name));

        return $this->render('MoocMoocBundle:Organisme:ListeInvitation.html.twig', array('listeInvitation' => $listeInvitation, 'name' => $name, 'nbr' => $nbr));
    }

    public function PreinscriptionOrganismeAction() {
        return $this->render('MoocMoocBundle:Organisme:PreinscriptionOrganisme.html.twig');
    }

    public function InviterFormateurAction($cin, $login, $nbr) {
        $error = '';
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Organisme');

        $formateur = $repository->findOneBy(array('cin' => $cin));
        $organisme = $repository2->findOneBy(array('login' => $login));

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        $em3 = $this->getDoctrine()->getManager();
        $repository3 = $em3->getRepository('MoocMoocBundle:Invitation');
        $invt = $repository3->findOneBy(array('nom_des' => $formateur->getLogin(), 'nom_exp' => $organisme->getLogin()));

        if ($invt) {
            $error = 'Vous avez déja envoyer une invitation a cet organisme';

//    $query = $em->createQuery('select  f.cin ,f.nom ,f.prenom,f.email from MoocMoocBundle:Formateur f where   f.Organisme = :i ')
//                ->setParameter('i',$organisme->getIdorganisme());
//            $listeFormateurs=$query->getResult();
            $em1 = $this->getDoctrine()->getManager();
            $listeFormateurs = $em->getRepository('MoocMoocBundle:Formateur')->findAll();
            return $this->render('MoocMoocBundle:Organisme:ListeTousFormateurs.html.twig', array('listeFormateur' => $listeFormateurs, 'Organisme' => $organisme, 'nbr' => $nbr));
        } else {
            $error = '';
            $invitation = new Invitation();
            $invitation->setNom_exp($organisme->getNom());
            $invitation->setNom_des($formateur->getNom());
            $invitation->setEtat(0);
            $dat = new \DateTime('now');
            $invitation->setDate_invit($dat);
            $em3->persist($invitation);
            $em3->flush();

//             $query = $em->createQuery('select  f.cin ,f.nom ,f.prenom,f.email from MoocMoocBundle:Formateur f where  f.nom != :p and f.Organisme != :i ')
//                  ;  $query->setParameters(array('p'=>$invitation->getNom_des().'%','i'=>$organisme->getIdorganisme()));
//            $listeFormateurs=$query->getResult();
            $em1 = $this->getDoctrine()->getManager();
            $listeFormateurs = $em->getRepository('MoocMoocBundle:Formateur')->findAll();
            return $this->render('MoocMoocBundle:Organisme:ListeTousFormateurs.html.twig', array('listeFormateur' => $listeFormateurs, 'Organisme' => $organisme, 'nbr' => $nbr));
        }
    }

    public function ChercherOrganismeAction($name, $nbr, Request $request) {


        $em1 = $this->getDoctrine()->getManager();
        $repository1 = $em1->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository1->findOneBy(array('nom' => $name));
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $nbr = $repository2->nombreInvit($Organisme->getNom());
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));
        $ListeOrganisme = null;
        if ($request->getMethod() == "POST") {
            $query = $em->createQuery('select o.nom ,o.adresse,o.email from MoocMoocBundle:Organisme o where  o.nom like :p ')
                    ->setParameter('p', '%' . $request->get('Chercher') . '%');
            $ListeOrganisme = $query->getResult();
            return $this->render('MoocMoocBundle:Organisme:ListeOrganisme1.html.twig', array('listeOrganismes' => $ListeOrganisme, 'Organisme' => $Organisme, 'nbr' => $nbr));
        }

        return $this->render('MoocMoocBundle:Organisme:ListeOrganisme1.html.twig', array('listeOrganismes' => $ListeOrganisme, 'Organisme' => $Organisme, 'nbr' => $nbr));
    }

    public function AccepterInvitAction($id,$name,$nbr) {
         $em4 = $this->getDoctrine()->getManager();
         $Invitation = $em4->getRepository('MoocMoocBundle:Invitation')->findOneBy(array('id' => $id));
         
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Organisme');
        $Organisme = $repository->findOneBy(array('nom' => $name));
          $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Formateur');
        $Formateur = $repository2->findOneBy(array('nom' => $Invitation->getNom_exp()));
        $Formateur->setOrganisme($Organisme);
         $Invitation->setEtat(1);
         $dat = new \DateTime('now');
            $Invitation->setDate_confi($dat);
         $em3 = $this->getDoctrine()->getManager();
            $em3->persist($Formateur);
            $em3->flush();
             $em5 = $this->getDoctrine()->getManager();
            $em5->persist($Invitation);
            $em5->flush();
            $repository3 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Invitation');
        $listeInvitation = $repository3->chercherInvit($Organisme->getNom(), 0);

                    return $this->redirectToRoute('mooc_mooc_ListeInvit', array('listeInvitation' => $listeInvitation, 'name' => $name, 'nbr' => $nbr));

    }

}
