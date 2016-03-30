<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of ContactController
 *
 * @author akoubi
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MoocMoocBundle:Default:index.html.twig');
    }
}
