<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AboutController
 *
 * @author akoubi
 */
class AboutController extends Controller {

    public function infoAction() {
         return $this->render('MoocMoocBundle:About:info.html.twig');
    }

}
