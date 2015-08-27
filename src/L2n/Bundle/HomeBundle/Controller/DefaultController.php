<?php

namespace L2n\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser(); //get user object

        return $this->render('L2nHomeBundle:Default:index.html.twig', array('name' => $user->getUsername(), 'roles' => $user->getRoles()));
    }
}
