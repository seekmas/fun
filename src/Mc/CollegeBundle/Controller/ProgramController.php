<?php

namespace Mc\CollegeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgramController extends Controller
{
    public function indexAction( $id )
    {

    	$programs =
    	$this->getDoctrine()
    		 ->getRepository('McAdminBundle:Program')
    		 ->createQueryBuilder('c')
    		 ->select('c')
    		 ->orderBy('c.sortId' , 'DESC')
    		 ->getQuery()
    		 ->getArrayResult();

    	$current = $this->getDoctrine()
    					->getRepository('McAdminBundle:Program')
    					->findOneById( $id);

    	$courses = $this->getDoctrine()
    					->getRepository('McAdminBundle:Unit')
    					->findByProgramId( $id );

    	return $this->render('McCollegeBundle:Program:index.html.twig' , 
    		array( 	'current' => $current , 
    			  	'courses' => $courses , 
    			  	'programs' => $programs
    			 )
    	);
    }

}
