<?php

namespace Play\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SessionController extends Controller {

    public function homeAction()
    {
        $current_user = $this->get('security.context')->getToken()->getUser();

        //dump($current_user);

        //$rc = $this->getDoctrine()->getRepository('PlayMainBundle:Ressources')->find($current_user);

        //dump($rc);

        return $this->render('PlayMainBundle:game-core:home.html.twig', array('user'=>$current_user));
    }
} 