<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of FormateurController
 *
 * @author akoubi
 */
class FormateurController extends Controller {

    public function afficheformateurAction() {
        
        return $this->render('MoocMoocBundle:Formateur:afficheformateur.html.twig');
    }

}
