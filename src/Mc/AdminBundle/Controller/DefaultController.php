<?php

namespace Mc\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	
        return $this->render('McAdminBundle:Default:index.html.twig');
    }
}
