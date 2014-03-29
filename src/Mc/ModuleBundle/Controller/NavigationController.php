<?php

namespace Mc\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
    public function showAction()
    {
    	return $this->render('McModuleBundle:Navigation:show.html.twig');
    }

}
