<?php

namespace Mobile\FrontendBundle\Controller;
use Mobile\FrontendBundle\Entity\contact;
use Mobile\FrontendBundle\Form\Type\ContactsType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    
    public function indexAction(Request $request)
    {
        $contact = new contact();

        $form = $this->createForm(new ContactsType(),$contact);
        $data = $request->request->get('contact_form');
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // выполняем прочие действие, например, сохраняем задачу в базе данных

                $contact->setFname($data['fname']);
                $contact->setLname($data['lname']);
                $contact->setEmail($data['email']);
                $contact->setPhone($data['phone']);
                $contact->setMessage($data['message']);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($contact);
                $em->flush();
                return $this->redirect($this->generateUrl('homepage'));

            }
        }
        return $this->render('MobileFrontendBundle:Contact:index.html.twig',array(
            'form' => $form->createView(),
        ));
    }
}
