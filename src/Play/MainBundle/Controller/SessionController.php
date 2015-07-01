<?php

namespace Play\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SessionController extends Controller {

    public function testAction()
    {
        return $this->render('PlayMainBundle::testsession.html.twig');
    }

} 