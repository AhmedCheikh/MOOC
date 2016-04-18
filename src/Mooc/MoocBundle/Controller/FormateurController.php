<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Mooc\MoocBundle\Entity\Formateur;
use Mooc\MoocBundle\Modals\LoginFormateur;
use Mooc\MoocBundle\Entity\Cours;
use Mooc\MoocBundle\Entity\Invitation;
use Mooc\MoocBundle\Entity\Organisme;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Validator\Constraints\DateTime as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Mooc\MoocBundle\Modals\Document;

/**
 * Description of FormateurController
 *
 * @author akoubi
 */
class FormateurController extends Controller {

    public function profileorganismeconnectAction($cin, $login) {
        $error = '';
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Organisme');

        $formateur = $repository->findOneBy(array('cin' => $cin));
        $organisme = $repository2->findOneBy(array('login' => $login));

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        return $this->render('MoocMoocBundle:Formateur:profilorganismeconnecter.html.twig', array('Error' => $error, 'Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin));
    }

    public function listeformateurbconnectAction($cin) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $formateurs = $repository->findAll();
        return $this->render('MoocMoocBundle:Formateur:listeformateurconnecter.html.twig', array('Formateurs' => $formateurs, 'Formateur' => $formateur, 'cin' => $cin));
    }

    public function listeorganismeconnectAction($cin) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Organisme');

        $formateur = $repository->findOneBy(array('cin' => $cin));
        $organismes = $repository2->findAll();
        return $this->render('MoocMoocBundle:Formateur:listeorganismeconnecter.html.twig', array('Organismes' => $organismes, 'Formateur' => $formateur, 'cin' => $cin));
    }

    public function afficheformateurAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateurs = $repository->findAll();
        return $this->render('MoocMoocBundle:Formateur:afficheformateur.html.twig', array('Formateurs' => $formateurs));
    }

    public function acceuilformateurAction($cin) {

//              $url = $request->getUri();
//              if ($url == 'http://localhost/Mooc_Web/web/app_dev.php/acceuilformateur') {
//              //return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig');
//              throw  new AccessDeniedException("Vous n'avez pas acces cette page");
        //}
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));

        return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('Formateur' => $formateur));
        //return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('Formateur' => $formateur,'cin' => $cin));
    }

    public function loginformateurAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $login = $request->get('login');
            $password = $request->get('password');
            $remember = $request->get('remb');

            //        $login = 'zidaine';
            //        $password = '123';

            $formateur = $repository->findOneBy(array('login' => $login, 'password' => $password));
            if ($formateur) {
                if ($remember == "remb") {
                    $loginformateur = new LoginFormateur();
                    $loginformateur->setPassword($login);
                    $loginformateur->setPassword($password);
                    $session->set('loginformateur', $loginformateur);
                    $session->start();
                }
//                $response = $this->forward('MoocMoocBundle:Formateur:pageint');
//                return $response;
                return $this->redirect($this->generateUrl('mooc_mooc_acceuilformateur', array('Formateur' => $formateur, 'cin' => $formateur->getCin())));
                //eturn $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig',array('Formateur' => $formateur));
            } else {
                return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig', array('nom' => 'Authentification échoué'));
            }
        } else {
            if ($session->has('loginformateur')) {
                $loginformateur = $session->get('loginformateur');
                $login = $loginformateur->getLogin();
                $password = $loginformateur->getPassword();
                $formateur = $repository->findOneBy(array('login' => $login, 'password' => $password));
                if ($formateur) {
                    return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('Formateur' => $formateur));
                }
            }
            return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig');
        }
    }

    public function pageintAction() {
        return $this->render('MoocMoocBundle:Formateur:pageintrouvable.html.twig');
    }

    public function inscriptionformateurAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $cin = $request->get('cinformateur');
            //var_dump($cin);
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');
            $etat = 0;
            $avatar = $request->files->get('avatar');
            $cv = 'cv';
            $login = $request->get('login');
            $password = $request->get('password');
            $passwordre = $request->get('passwordre');
            $status = 'saccess';
            $uploadedURL = '';
            $message = '';
            $formateur = new Formateur();

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
                        $uploadedURL = $uploadedURL = $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $avatar->getBasename();

                        if ($password == $passwordre) {
                            var_dump($cin);
                            $formateur->setCin($cin);
                            $formateur->setNom($nom);
                            $formateur->setPrenom($prenom);
                            $formateur->setEmail($email);
                            $formateur->setEtat($etat);
                            $formateur->setAvatar($avatar);
                            $formateur->setAvatar($originalName);
                            $formateur->setCv($cv);
                            $formateur->setLogin($login);
                            $formateur->setPassword($password);

                            $em = $this->getDoctrine()->getManager();
                            $em->persist($formateur);
                            $em->flush();
                        } else {
                            $status = 'failed';
                            $message = 'Les mots de passe nes sont pas identiques';
                        }
                    } else {
                        $status = 'failed';
                        $message = 'invalid file type';
                    }
                } else {
                    $status = 'failed';
                    $message = 'size exceded limit';
                }
            } else {
                $status = 'failed';
                $message = 'File error';
            }
            return $this->render('MoocMoocBundle:Formateur:inscriptionformateur.html.twig', array('status' => $status, 'message' => $message, 'uploadedURL' => $uploadedURL));
        } else {

            return $this->render('MoocMoocBundle:Formateur:inscriptionformateur.html.twig');
        }
    }

    public function logoutformateurAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('MoocMoocBundle:Formateur:loginformateur.html.twig');
    }

    public function publiercourAction(Request $request, $cin) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Quiz');

        $quizs = $repository2->findAll();

        $formateur = $repository->findOneBy(array('cin' => $cin));
        if ($request->getMethod() == 'POST') {

            $nom_cours = $request->get('nom_cours');
            $numquiz = $request->get('idQuiz');
            $idQuiz = $this->getDoctrine()->getManager()->getRepository('MoocMoocBundle:Quiz')->findOneById($numquiz);
//                    $request->get('idQuiz');
            $cinformateur = $this->getDoctrine()->getManager()->getRepository('MoocMoocBundle:Formateur')->findOneBy(array('cin' => $cin));
            $description = $request->get('description');
            $difficulte = $request->get('difficulte');
            $objectif = $request->get('objectif');
            $video = 'zied.mp4';
            $etatVideo = 0;

            $cour = new Cours();

            $cour->setNomCours($nom_cours);
            $cour->setIdquiz($idQuiz);
            $cour->setCinformateur($cinformateur);
            $cour->setDescription($description);
            $cour->setDifficulte($difficulte);
            $cour->setObjectif($objectif);
            $cour->setVideo($video);
            $cour->setEtatvideo($etatVideo);

            $em->persist($cour);
            $em->flush();
        }
        return $this->render('MoocMoocBundle:Formateur:publiercour.html.twig', array('Quiz' => $quizs, 'Formateur' => $formateur, 'cin' => $formateur->getCin()));
    }

    public function listecourformateurAction($cin) {
        $em = $this->getDoctrine()->getManager();
        $em2 = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $rep2 = $em2->getRepository('MoocMoocBundle:Cours');
        $formateur = $repository->findOneBy(array('cin' => $cin));

        $lstcours = $rep2->findAll();

        return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('Formateur' => $formateur, 'Lstcours' => $lstcours, 'cin' => $formateur->getCin()));
    }

    public function profilformateurAction($cin) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $formateurs = $repository->findAll();

        return $this->render('MoocMoocBundle:Formateur:profilformateur.html.twig', array('Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin()));
    }

    public function editerprofileAction(Request $request, $cin) {


        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('MoocMoocBundle:Formateur');
            $formateur = $repository->findOneBy(array('cin' => $cin));
            $formateurs = $repository->findAll();

            $cin = $request->get('cin');
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');
            $avatar = 'defaut.jpg';
            $login = $request->get('login');
            $password = $request->get('password');


            $formateur->setCin($cin);
            $formateur->setNom($nom);
            $formateur->setPrenom($prenom);
            $formateur->setEmail($email);
            $formateur->setAvatar($avatar);
            $formateur->setLogin($login);
            $formateur->setPassword($password);

            $em->persist($formateur);

            $em->flush();
        }
        return $this->render('MoocMoocBundle:Formateur:profilformateur.html.twig', array('Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateurs->getCin()));
    }

    public function afficherformateurAction() {

        return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('Lstcours' => $lstcours, 'nom' => $frm->getNom(), 'prenom' => $frm->getPrenom(), 'cin' => $frm->getCin()));
    }

    public function inviterOrganismeAction($cin, $login) {
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
        $invt = $repository3->findOneBy(array('nomExp' => $formateur->getLogin(), 'nomDes' => $organisme->getLogin()));

        if ($invt) {
            $error = 'Vous avez déja envoyer une invitation a cet organisme';
//           $response = new Response("<h1>بلاهي أقعد ترونكيل ماك بعثتلو أنفيت</h1>");
//           return $response; 
            return $this->render('MoocMoocBundle:Formateur:profilorganismeconnecter.html.twig', array('Error' => $error, 'Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin));
        } else {
            $error = '';
            $invitation = new Invitation();
            $invitation->setNomExp($formateur->getLogin());
            $invitation->setNomDes($organisme->getLogin());
            $invitation->setEtat(0);
            $dat = new \DateTime('now');
            $invitation->setDateInvit($dat);
            $em3->persist($invitation);
            $em3->flush();

            return $this->render('MoocMoocBundle:Formateur:profilorganismeconnecter.html.twig', array('Error' => $error, 'Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin));
        }
    }

    public function listeinvitationAction($cin) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $formateurs = $repository->findAll();
        $repository2 = $em->getRepository('MoocMoocBundle:Invitation');
        $repository3 = $em->getRepository('MoocMoocBundle:Organisme');
        $invitations = $repository2->findBy(array('nomDes' => $formateur->getLogin()));
        
        $organisme = New Organisme();
        
        $listOrg = array();
        $cc = 0;
        for ($numero = 0; $numero < sizeof($invitations); $numero++) {
            if ($invitations[$numero]->getNomExp()->contains($organisme)) {
                $listOrg[$cc] = $invitations[$numero];
            }
        }
        
        return $this->render('MoocMoocBundle:Formateur:listeinvitation.html.twig', array('Invitations' => $invitations, 'Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin()));
    }

}
