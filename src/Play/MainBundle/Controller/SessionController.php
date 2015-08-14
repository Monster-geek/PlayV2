<?php

namespace Play\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SessionController extends Controller {

    public function homeAction()
    {

        $current_user = $this->get('security.context')->getToken()->getUser();

        return $this->render('PlayMainBundle:game-core:home.html.twig', array('user'=>$current_user));
    }

} 