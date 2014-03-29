<?php

namespace Mc\CollegeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortalController extends Controller
{
    public function indexAction()
    {
    	$programs =
    	$this->getDoctrine()
    		 ->getRepository('McAdminBundle:Program')
    		 ->createQueryBuilder('c')
    		 ->select('c')
    		 ->orderBy('c.sortId' , 'DESC')
    		 ->getQuery()
    		 ->getArrayResult();

    	return $this->render('McCollegeBundle:Portal:index.html.twig' , array('programs' => $programs ));
    }
}
