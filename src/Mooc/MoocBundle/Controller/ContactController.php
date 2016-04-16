<?php
namespace Mooc\MoocBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Contact;
use Mooc\MoocBundle\Form\ContactType;
/**
 * Description of ContactController
 *
 * @author akoubi
 */
class ContactController extends Controller{
    
    public function sendAction(){
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);
        
        $request = $this->getRequest();
        
        if ($request->isMethod('Post')) {
            $form->bind($request);
            
            if ($form->isValid()) {
                $contact = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                return $this->redirect($this->generateUrl('mooc_mooc_homepage'));
            }
        }
        return $this->render('MoocMoocBundle:Contact:send.html.twig',array('form'=>$form->createView()));
    }
}
