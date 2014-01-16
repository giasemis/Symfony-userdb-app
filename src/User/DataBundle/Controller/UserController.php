<?php
// src/User/DataBundle/Controller/UserController.php

namespace User\DataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use User\DataBundle\Entity\User;
use User\DataBundle\Form\Usertype;

/**
 * User controller.
 */
class UserController extends Controller
{
    /**
     * Show a user
     */
    public function showuserAction($id)
    {
	
	
        $em = $this->getDoctrine()->getEntityManager();

        $user = $em->getRepository('UserDataBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Unable to find User.');
        }

        return $this->render('UserDataBundle:User:showuser.html.twig', array(
            'user'      => $user,
        ));
    }
}