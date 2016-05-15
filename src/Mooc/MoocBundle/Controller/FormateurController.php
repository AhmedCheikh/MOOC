<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Formateur;
use Mooc\MoocBundle\Modals\LoginFormateur;
use Mooc\MoocBundle\Entity\Cours;
use Mooc\MoocBundle\Entity\Invitation;
use Mooc\MoocBundle\Entity\Comite;
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

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************//
        
        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Organisme');

        $formateur = $repository->findOneBy(array('cin' => $cin));
        $organisme = $repository2->findOneBy(array('login' => $login));

        return $this->render('MoocMoocBundle:Formateur:profilorganismeconnecter.html.twig', array('Error' => $error, 'Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit'=>count($inv)));
    }

    public function listeformateurbconnectAction(Request $request, $cin) {

        $em = $this->get('doctrine.orm.entity_manager');
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        
        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************//
        
        $dql = "SELECT a FROM MoocMoocBundle:Formateur a ";
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $formateurs = $paginator->paginate(
                $query, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 6/* limit per page */
        );
        return $this->render('MoocMoocBundle:Formateur:listeformateurconnecter.html.twig', array('Formateurs' => $formateurs, 'Formateur' => $formateur, 'cin' => $cin, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit'=>  count($inv)));
    }

    public function listeorganismeconnectAction(Request $request, $cin) {
        $error = '';
        $em = $this->get('doctrine.orm.entity_manager');
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        
        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************//
        
        $dql = "SELECT a FROM MoocMoocBundle:Organisme a ";
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $organismes = $paginator->paginate(
                $query, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 6/* limit per page */
        );
        return $this->render('MoocMoocBundle:Formateur:listeorganismeconnecter.html.twig', array('Organismes' => $organismes, 'Formateur' => $formateur, 'cin' => $cin, 'er' => $error, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit'=>  count($inv)));
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

        //bloc pour pour ajouter formateur a la comite//
        $repository3 = $em->getRepository('MoocMoocBundle:Comite');
        $comverif = $repository3->findOneBy(array('cin' => $formateur->getCin()));

        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);

        if ($j > 1 && $comverif == null) {
            $NouveauMbrComite = new Comite();
            $NouveauMbrComite->setCin($formateur->getCin());
            $NouveauMbrComite->setNom($formateur->getNom());
            $NouveauMbrComite->setPrenom($formateur->getPrenom());
            $NouveauMbrComite->setEmail($formateur->getEmail());
            $NouveauMbrComite->setLogin($formateur->getLogin());
            $NouveauMbrComite->setPassword($formateur->getPassword());

            $em->persist($NouveauMbrComite);
            $em->flush();
        }
        //bloc pour pour ajouter formateur a la comite//

        $var = $cin;
        $query = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $query->getResult();

        if ($formateur->getRole() == 'ROLE_FORMATEUR') {
            $session = $this->getRequest()->getSession();
            return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('Formateur' => $formateur, 'nbrInvit' => count($inv), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
            //return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig', array('Formateur' => $formateur,'cin' => $cin));         
        } else {
            return $this->redirect($this->generateUrl('mooc_mooc_logformateur'));
        }
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
                //return $this->render('MoocMoocBundle:Formateur:acceuilformateur.html.twig',array('Formateur' => $formateur, 'cin' => $formateur->getCin()));
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
            $cv = $request->files->get('cv');
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
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png', 'mp3', 'pdf');
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
            return $this->render('MoocMoocBundle:Formateur:inscriptionformateur.html.twig', array('status' => $status, 'message' => $message, 'uploadedURL' => $uploadedURL,'nbrInvit' => count($inv)));
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

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************//

        $repository2 = $em2->getRepository('MoocMoocBundle:Quiz');
        $quizs = $repository2->findAll();
        $formateur = $repository->findOneBy(array('cin' => $cin));
        if ($request->getMethod() == 'POST') {
            $nom_cours = $request->get('nom_cours');
            $numquiz = $request->get('idQuiz');
            $idQuiz = $this->getDoctrine()->getManager()->getRepository('MoocMoocBundle:Quiz')->findOneById($numquiz);
//          $request->get('idQuiz');
            $cinformateur = $this->getDoctrine()->getManager()->getRepository('MoocMoocBundle:Formateur')->findOneBy(array('cin' => $cin));
            $description = $request->get('description');
            $difficulte = $request->get('difficulte');
            $objectif = $request->get('objectif');
            $video = $request->files->get('video');
            $etatVideo = 0;
            $status = 'saccess';
            $uploadedURL = '';
            $message = '';
            $cour = new Cours();

            if (($video instanceof UploadedFile) && ($video->getError() == '0')) {
                if (($video->getSize() < 2000000000)) {
                    $originalName = $video->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('mp4', 'pdf');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        $document = new Document();
                        $document->setFile($video);
                        $document->setSubDirectory('video');
                        $document->processFile();
                        $uploadedURL = $uploadedURL = $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $video->getBasename();

                        $cour->setNomCours($nom_cours);
                        $cour->setIdquiz($idQuiz);
                        $cour->setCinformateur($cinformateur);
                        $cour->setDescription($description);
                        $cour->setDifficulte($difficulte);
                        $cour->setObjectif($objectif);
                        $cour->setVideo($originalName);
                        $cour->setEtatvideo($etatVideo);

                        $em->persist($cour);
                        $em->flush();
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
            return $this->render('MoocMoocBundle:Formateur:publiercour.html.twig', array('status' => $status, 'message' => $message, 'uploadedURL' => $uploadedURL, 'Quiz' => $quizs, 'Formateur' => $formateur, 'cin' => $formateur->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
        } else {
            return $this->render('MoocMoocBundle:Formateur:publiercour.html.twig', array('Quiz' => $quizs, 'Formateur' => $formateur, 'cin' => $formateur->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
        }
    }

    public function listecourformateurAction(Request $request, $cin) {
//        $em = $this->getDoctrine()->getManager();
//        $em2 = $this->getDoctrine()->getManager();
//        $repository = $em->getRepository('MoocMoocBundle:Formateur');
//        $rep2 = $em2->getRepository('MoocMoocBundle:Cours');
//        $formateur = $repository->findOneBy(array('cin' => $cin));
//        $lstcours = $rep2->findBy(array('cinformateur'=>$cin));

        $em = $this->get('doctrine.orm.entity_manager');
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 

        $dql = "SELECT a FROM MoocMoocBundle:Cours a where a.cinformateur = $cin";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 5/* limit per page */
        );

        // parameters to template
        return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('Formateur' => $formateur, 'cin' => $formateur->getCin(), 'pagination' => $pagination, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
        // return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('Formateur' => $formateur, 'Lstcours' => $lstcours, 'cin' => $formateur->getCin()));
    }

    public function profilformateurAction($cin) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $formateurs = $repository->findAll();
        $var = $cin;

        $query = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 1");
        $in = $query->getResult();

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();
        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 

        $vardate = new \DateTime();
        $datesys = $vardate->format('Y-m-d');

        $Latitudes = '-24';
        $Longitudes = '142';
        return $this->render('MoocMoocBundle:Formateur:profilformateur.html.twig', array('Latitudes' => $Latitudes, 'Longitudes' => $Longitudes,
                    'Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j, 'mesorgs' => $in, 'Datesys' => $datesys,'nbrInvit' => count($inv)));
    }

    public function editerprofileAction(Request $request, $cin) {


        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('MoocMoocBundle:Formateur');
            $formateur = $repository->findOneBy(array('cin' => $cin));
            $formateurs = $repository->findAll();

            //***************** BLOC Compteur des apréciationet des invitation*****************//
            $var = $cin;
            $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
            $inv = $qr->getResult();

            $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                    ->setParameter('a', $cin);
            $Coursuivi = $querycom->getResult();
            $j = sizeof($Coursuivi);

            //***************** BLOC Compteur des apréciationet des invitation*****************// 

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
        return $this->render('MoocMoocBundle:Formateur:profilformateur.html.twig', array('Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateurs->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
    }

    public function afficherformateurAction() {

        return $this->render('MoocMoocBundle:Formateur:listecourformateur.html.twig', array('Lstcours' => $lstcours, 'nom' => $frm->getNom(), 'prenom' => $frm->getPrenom(), 'cin' => $frm->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
    }

    public function inviterOrganismeAction($cin, $login) {
        $error = '';
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Organisme');

        $formateur = $repository->findOneBy(array('cin' => $cin));
        $organisme = $repository2->findOneBy(array('login' => $login));

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();

        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 

        $em3 = $this->getDoctrine()->getManager();
        $repository3 = $em3->getRepository('MoocMoocBundle:Invitation');
        $invt = $repository3->findOneBy(array('nomExp' => $formateur->getCin(), 'nomDes' => $organisme->getLogin()));

        if ($invt) {
            $error = 'Vous avez déja envoyer une invitation a cet organisme';
//           $response = new Response("<h1>بلاهي أقعد ترونكيل ماك بعثتلو أنفيت</h1>");
//           return $response; 
            return $this->render('MoocMoocBundle:Formateur:profilorganismeconnecter.html.twig', array('Error' => $error, 'Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
        } else {
            $error = '';
            $invitation = new Invitation();
            $invitation->setNomExp($formateur->getCin());
            $invitation->setNomDes($organisme->getLogin());
            $invitation->setEtat(0);
            $dat = new \DateTime('now');
            $invitation->setDateInvit($dat);
            $em3->persist($invitation);
            $em3->flush();

            return $this->render('MoocMoocBundle:Formateur:profilorganismeconnecter.html.twig', array('Error' => $error, 'Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
        }
    }

    public function listeinvitationAction($cin) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $formateurs = $repository->findAll();

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();

        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 

        $repository2 = $em->getRepository('MoocMoocBundle:Invitation');
        $invitations = $repository2->findBy(array('nomDes' => $formateur->getCin(), 'etat' => 0));

//        $listOrg = array();
//        $listeinvitorg = array();        
//        for ($numero = 0; $numero < sizeof($invitations); $numero++) {
//            $listOrg[$numero] = $invitations[$numero]->getNomExp();    
//        }
//        for ($i = 0; $i < sizeof($listOrg); $i++) {
//        $listeinvitorg[$i] =$repository3->findBy(array('login'=>$listOrg[$i]));         
//        }
        //var_dump($listeinvitorg);
        //die();
        return $this->render('MoocMoocBundle:Formateur:listeinvitation.html.twig', array('Invitations' => $invitations, 'Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
    }

    public function repondreorganismeAction($cin, $login) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();

        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 

        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('MoocMoocBundle:Organisme');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $organisme = $repository2->findOneBy(array('login' => $login));
        return $this->render('MoocMoocBundle:Formateur:repondreorganisme.html.twig', array('Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
    }

    public function refuserinvitationAction($cin, $login) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $formateurs = $repository->findAll();

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();

        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 

        $repository2 = $em->getRepository('MoocMoocBundle:Invitation');
        $invitations = $repository2->findBy(array('nomDes' => $formateur->getCin()));
        $invitation = $repository2->findOneBy(array('nomExp' => $login, 'nomDes' => $formateur->getCin(), 'etat' => 0));

        $em->remove($invitation);
        $em->flush();

        //return $this->render('MoocMoocBundle:Formateur:listeinvitation.html.twig', array('Invitations' => $invitations, 'Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin()));
        return $this->redirect($this->generateUrl('mooc_mooc_listeinvitation', array('Invitations' => $invitations, 'Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv))));
    }

    public function accepterinvitationAction($cin, $login) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));
        $formateurs = $repository->findAll();

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();

        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 

        $repository2 = $em->getRepository('MoocMoocBundle:Invitation');
        $invitations = $repository2->findBy(array('nomDes' => $formateur->getLogin()));
        $invitation = $repository2->findOneBy(array('nomExp' => $login, 'nomDes' => $formateur->getCin(), 'etat' => 0));

        $invitation->setEtat(1);
        $em->flush();
        return $this->redirect($this->generateUrl('mooc_mooc_listeinvitation', array('Invitations' => $invitations, 'Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin(), 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv))));
        //return $this->render('MoocMoocBundle:Formateur:listeinvitation.html.twig', array('Invitations' => $invitations, 'Formateur' => $formateur, 'Formateurs' => $formateurs, 'cin' => $formateur->getCin()));
    }

    public function nombreinvitationAction() {
        $em = $this->getDoctrine()->getManager();
        $var = '07950625';
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $var));
//        $query = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 1");
//        $inv = $query->getResult();
//*****************************************************************************************************
        $repository3 = $em->getRepository('MoocMoocBundle:Comite');
        $comverif = $repository3->findOneBy(array('cin' => $formateur->getCin()));

        $query = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $var);
        $Coursuivi = $query->getResult();
        $j = sizeof($Coursuivi);

        if ($j > 1 && $comverif == null) {
            $NouveauMbrComite = new Comite();
            $NouveauMbrComite->setCin($formateur->getCin());
            $NouveauMbrComite->setNom($formateur->getNom());
            $NouveauMbrComite->setPrenom($formateur->getPrenom());
            $NouveauMbrComite->setEmail($formateur->getEmail());
            $NouveauMbrComite->setLogin($formateur->getLogin());
            $NouveauMbrComite->setPassword($formateur->getPassword());

            $em->persist($NouveauMbrComite);
            $em->flush();
        }

        return $this->render('MoocMoocBundle:Formateur:testtwig.html.twig', array('Lsc' => $Coursuivi, 'lstnt' => $j, 'frm' => $formateur));
//***********************************************************
//        $query =$em->createQuery('
//            SELECT cv,c FROM MoocMoocBundle:coursuivi cv
//            JOIN cv.idCours c
//            WHERE cv.idCours = :id'
//                        )->setParameter('id', 20);
//        $ls = $query->getResult();
//        $queru = $em
//        ->createQueryBuilder()
//        ->select('r')
//        ->from('MoocMoocBundle:Cours', 'r')
//        ->innerJoin('MoocMoocBundle:Coursuivi','cv')
//        ->where('cv.idcoursuivi = r.idcours')
//        //->andwhere('cv.idcoursuivi = :id')
//        //->setParameter('id', $var)
//        ->getQuery()
//        ->getResult();
    }

    public function rechercherOrganismeAction(Request $request, $cin) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoocMoocBundle:Formateur');
        $formateur = $repository->findOneBy(array('cin' => $cin));

        //***************** BLOC Compteur des apréciationet des invitation*****************//
        $var = $cin;
        $qr = $em->createQuery("select m from MoocMoocBundle:Invitation m where m.nomDes =$var and m.etat = 0");
        $inv = $qr->getResult();

        $querycom = $em->createQuery('select cs.appreciation from MoocMoocBundle:Coursuivi cs ,MoocMoocBundle:Cours c where c.cinformateur = :a and c.idcours = cs.idCours and cs.appreciation = 5 ')
                ->setParameter('a', $cin);
        $Coursuivi = $querycom->getResult();
        $j = sizeof($Coursuivi);
        //***************** BLOC Compteur des apréciationet des invitation*****************// 
        //***************** bloc de la liste d'invitation *********************************//
        $dql = "SELECT a FROM MoocMoocBundle:Organisme a ";
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $organismes = $paginator->paginate(
                $query, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 6/* limit per page */
        );
        //***************** bloc de la liste d'invitation *********************************//

        $repository2 = $em->getRepository('MoocMoocBundle:Organisme');

        if ($request->getMethod() == 'POST') {
            $nomorganisme = $request->get('loginorganisme');
            $organisme = $repository2->findOneBy(array('login' => $nomorganisme));
            if ($organisme) {
                return $this->profileorganismeconnectAction($cin, $organisme->getLogin());
                //return $this->render('MoocMoocBundle:Formateur:rechercherOrganisme.html.twig', array('Error' => $error, 'Organisme' => $organisme, 'Formateur' => $formateur, 'cin' => $cin,'nbrInvit' => count($inv), 'lstinvit' => $inv, 'nbaprec' => $j));
            } else {
                $error = $nomorganisme . " n'est pas inscrit chez nous";
                return $this->render('MoocMoocBundle:Formateur:listeorganismeconnecter.html.twig', array('Organismes' => $organismes, 'Formateur' => $formateur, 'cin' => $cin, 'er' => $error, 'lstinvit' => $inv, 'nbaprec' => $j,'nbrInvit' => count($inv)));
            }
        }
    }

}
