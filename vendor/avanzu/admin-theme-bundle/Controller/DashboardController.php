<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Avanzu\AdminThemeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 *
 * @package Avanzu\AdminThemeBundle\Controller
 */
class DashboardController extends Controller {
    
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function dashboardAction() {
        $repository1 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $repository2 = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        
        $nbfnv = $repository1->nombreFormateurNonValide() ; 
        $nbonv = $repository2->nombreOrganismeNonValide() ; 
        $repositoryf = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Formateur');
        $nbf = $repositoryf->nombreFormateur() ; 
        
        $repositoryc = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $nbc = $repositoryc->nombreCours() ;
        
        $repositoryo = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Organisme');
        $nbo = $repositoryo->nombreOrganisme() ;
        
        $repositorya = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Apprenant');
        $nba = $repositorya->nombreApprenant() ;
        
        // for stat
        
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Cours');
        $repositorycs = $this->getDoctrine()
                ->getManager()
                ->getRepository('MoocMoocBundle:Coursuivi');
        
        $nband = $repository-> nombreCoursAndroid() ; 
        $nbiOS = $repository-> nombreCoursiOS() ; 
        $nbJ2ME = $repository-> nombreCoursJ2ME() ; 
        $nbWP = $repository-> nombreCoursWP() ; 
        //Android
        $anjan = $repositorycs->nombreCoursAndroidJanvier() ; 
        $anfev = $repositorycs->nombreCoursAndroidFevrier() ; 
        $anmars = $repositorycs->nombreCoursAndroidMars() ; 
        $anav = $repositorycs->nombreCoursAndroidAvril() ; 
        $anmai = $repositorycs->nombreCoursAndroidMai() ; 
        $anjuin = $repositorycs->nombreCoursAndroidJuin() ; 
        $anjuillet = $repositorycs->nombreCoursAndroidJuillet() ; 
        $anaout = $repositorycs->nombreCoursAndroidAout() ; 
        $ansep = $repositorycs->nombreCoursAndroidSeptembre() ; 
        $anoc = $repositorycs->nombreCoursAndroidOctobre() ; 
        $annov = $repositorycs->nombreCoursAndroidNovembre() ; 
        $andec = $repositorycs->nombreCoursAndroidDecembre() ; 
        //iOS
        $ijan = $repositorycs->nombreCoursiOSJanvier() ; 
        $ifev = $repositorycs->nombreCoursiOSFevrier() ; 
        $imars = $repositorycs->nombreCoursiOSMars() ; 
        $iav = $repositorycs->nombreCoursiOSAvril() ; 
        $imai = $repositorycs->nombreCoursiOSMai() ; 
        $ijuin = $repositorycs->nombreCoursiOSJuin() ; 
        $ijuillet = $repositorycs->nombreCoursiOSJuillet() ; 
        $iaout = $repositorycs->nombreCoursiOSAout() ; 
        $isep = $repositorycs->nombreCoursiOSSeptembre() ; 
        $ioc = $repositorycs->nombreCoursiOSOctobre() ; 
        $inov = $repositorycs->nombreCoursiOSNovembre() ; 
        $idec = $repositorycs->nombreCoursiOSDecembre() ; 
        
        // Windows Phone
        
        $wjan = $repositorycs->nombreCoursWPJanvier() ; 
        $wfev = $repositorycs->nombreCoursWPFevrier() ; 
        $wmars = $repositorycs->nombreCoursWPMars() ; 
        $wav = $repositorycs->nombreCoursWPAvril() ; 
        $wmai = $repositorycs->nombreCoursWPMai() ; 
        $wjuin = $repositorycs->nombreCoursWPJuin() ; 
        $wjuillet = $repositorycs->nombreCoursWPJuillet() ; 
        $waout = $repositorycs->nombreCoursWPAout() ; 
        $wsep = $repositorycs->nombreCoursWPSeptembre() ; 
        $woc = $repositorycs->nombreCoursWPOctobre() ; 
        $wnov = $repositorycs->nombreCoursWPNovembre() ; 
        $wdec = $repositorycs->nombreCoursWPDecembre() ; 
        
        // J2ME
        
        $jjan = $repositorycs->nombreCoursJJanvier() ; 
        $jfev = $repositorycs->nombreCoursJFevrier() ; 
        $jmars = $repositorycs->nombreCoursJMars() ; 
        $jav = $repositorycs->nombreCoursJAvril() ; 
        $jmai = $repositorycs->nombreCoursJMai() ; 
        $jjuin = $repositorycs->nombreCoursJJuin() ; 
        $jjuillet = $repositorycs->nombreCoursJJuillet() ; 
        $jaout = $repositorycs->nombreCoursJAout() ; 
        $jsep = $repositorycs->nombreCoursJSeptembre() ; 
        $joc = $repositorycs->nombreCoursJOctobre() ; 
        $jnov = $repositorycs->nombreCoursJNovembre() ; 
        $jdec = $repositorycs->nombreCoursJDecembre() ;
        
        return $this->render('AvanzuAdminThemeBundle:Default:dashboard.html.twig', array('nbf'=>$nbf,'nbo'=>$nbo,'nba'=>$nba,'nbc'=>$nbc,'nband'=>$nband,
            'nbiOS'=>$nbiOS,
            'nbJ2ME'=>$nbJ2ME,
            'nbWP'=>$nbWP,
            
            'anjan'=>$anjan,
            'anfev'=>$anfev,
            'anmars'=>$anmars,
            'anav'=>$anav,
            'anmai'=>$anmai,
            'anjuin'=>$anjuin,
            'anjuillet'=>$anjuillet,
            'anaout'=>$anaout,
            'ansep'=>$ansep,
            'anoc'=>$anoc,
            'annov'=>$annov,
            'andec'=>$andec,
                
            'ijan'=>$ijan,
            'ifev'=>$ifev,
            'imars'=>$imars,
            'iav'=>$iav,
            'imai'=>$imai,
            'ijuin'=>$ijuin,
            'ijuillet'=>$ijuillet,
            'iaout'=>$iaout,
            'isep'=>$isep,
            'ioc'=>$ioc,
            'inov'=>$inov,
            'idec'=>$idec,
            
            'wjan'=>$wjan,
            'wfev'=>$wfev,
            'wmars'=>$wmars,
            'wav'=>$wav,
            'wmai'=>$wmai,
            'wjuin'=>$wjuin,
            'wjuillet'=>$wjuillet,
            'waout'=>$waout,
            'wsep'=>$wsep,
            'woc'=>$woc,
            'wnov'=>$wnov,
            'wdec'=>$wdec, 
            
            'jjan'=>$jjan,
            'jfev'=>$jfev,
            'jmars'=>$jmars,
            'jav'=>$jav,
            'jmai'=>$jmai,
            'jjuin'=>$jjuin,
            'jjuillet'=>$jjuillet,
            'jaout'=>$jaout,
            'jsep'=>$jsep,
            'joc'=>$joc,
            'jnov'=>$jnov,
            'jdec'=>$jdec,'nbfnv'=>$nbfnv,'nbonv'=>$nbonv
            )); 
    }

    
}
