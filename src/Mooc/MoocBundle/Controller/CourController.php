<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of CourController
 *
 * @author akoubi
 */
class CourController extends Controller {

    public function affichecourAction() {
        
        return $this->render('MoocMoocBundle:Cour:affichecour.html.twig');
    }

}
