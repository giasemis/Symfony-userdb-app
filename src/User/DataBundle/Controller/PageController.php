<?php
// src/User/DataBundle/Controller/PageController.php

namespace User\DataBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use User\DataBundle\Entity\User;
use User\DataBundle\Form\Usertype;

class PageController extends Controller
{
    public function indexAction()
    {
	 $em = $this->getDoctrine()->getEntityManager();

        $users = $em->getRepository('UserDataBundle:User')->findAll();

       
            return $this->render('UserDataBundle:Page:index.html.twig', array(
            'users'      => $users,
        ));
       
    }
	public function AdduserAction()
    {
	
	$userdata = new User();
    $form = $this->createForm(new Usertype(), $userdata);
	
	 $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
		
        $form->handleRequest($request);
		if ($form->isValid()) {
	   
	    $em = $this->getDoctrine()->getEntityManager();
       	
		$userdata ->setUsername($form['username']->getData());
		$userdata ->setRegistrationDate($form['RegistrationDate']->getData());
		 
		$em->persist($userdata);
            $em->flush();
	
		return $this->redirect($this->generateUrl('userdata_adduser'));
		}
		}
	
        return $this->render('UserDataBundle:Page:adduser.html.twig', array(
        'form' => $form->createView()));
    }

	
}