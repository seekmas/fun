<?php

namespace Mc\CollegeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RepositoryController extends Controller
{
    public function indexAction( $id = null)
    {

        $context = array();

    	if( $id )
    	{
    		$program = $this->getDoctrine()->getRepository('McAdminBundle:Program')->findOneById( $id );
            
            $units = $this->getDoctrine()->getRepository('McAdminBundle:Unit')->findByProgramId( $id );

            $context['description'] = $program;
            $context['units'] = $units;
    	}

    	$programs = $this->getDoctrine()->getRepository('McAdminBundle:Program')->findAll();

    	return $this->render('McCollegeBundle:Repository:index.html.twig' , array(
    		'programs' => $programs , 
    		'context'  => $context , 
    	));
    }

}
