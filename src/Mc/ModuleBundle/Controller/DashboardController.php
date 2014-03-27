<?php

namespace Mc\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Yaml\Parser;

class DashboardController extends Controller
{
    public function showAction()
    {

    	$yaml = new Parser();

    	return $this->render('McModuleBundle:Dashboard:show.html.twig');

    }

}
