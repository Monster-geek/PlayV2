<?php

namespace Play\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AHController extends Controller
{

    public function displayAction()
    {
        $current_user = $this->get('security.context')->getToken()->getUser();

        return $this->render('PlayMainBundle:game-core:AuctionHouse.html.twig', array('user'=>$current_user));
    }

} 