<?php

namespace Mc\CollegeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction( $id)
    {

        $programs =
        $this->getDoctrine()
             ->getRepository('McAdminBundle:Program')
             ->createQueryBuilder('c')
             ->select('c')
             ->orderBy('c.sortId' , 'DESC')
             ->getQuery()
             ->getArrayResult();

        $playing = $this->getDoctrine()
                        ->getRepository('McAdminBundle:Unit')
                        ->findOneById( $id);

        $current = $this->getDoctrine()
                        ->getRepository('McAdminBundle:Program')
                        ->findOneById( $playing->getProgramId() );

        $courses = $this->getDoctrine()
                        ->getRepository('McAdminBundle:Unit')
                        ->findByProgramId( $playing->getProgramId() );




        return $this->render('McCollegeBundle:Default:index.html.twig' , 
        	array(  'id'       => $id , 
                    'playing' => $playing , 
                    'current' => $current , 
                    'courses' => $courses , 
                    'programs' => $programs
        		 )
        );
    }

    public function playAction( $id)
    {

        $entry = $this->getDoctrine()->getRepository('McAdminBundle:Unit')->findOneById( $id);
    	return $this->render('McCollegeBundle:Default:play.html.twig' , array('entry' => $entry) );
    }

    public function rollAction()
    {

        echo 'Roll words';

        return new \Symfony\Component\HttpFoundation\Response();
    }

}
