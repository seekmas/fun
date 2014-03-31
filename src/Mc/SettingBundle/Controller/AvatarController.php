<?php

namespace Mc\SettingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mc\SettingBundle\Entity\Avatar;
use Mc\SettingBundle\Form\AvatarType;

class AvatarController extends Controller
{
    public function indexAction()
    {
    	$avatar = $this->getDoctrine()->getRepository('McSettingBundle:Avatar')->findOneByUserId(  $this->container->get('security.context')->getToken()->getUser()->getId() );

    	$avatar = 'http://lean-avatar.b0.upaiyun.com/avatar/'.( $avatar ? $avatar->getAvatar() : 'default.jpg');

    	return $this->render('McSettingBundle:Avatar:index.html.twig' , array('avatar'=>$avatar));
    }

    public function photoAction()
    {
    	
    	$list =  $this->get('upload.upyun')->getList('/avatar/');

    	$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

    	$form = $this->createForm( new AvatarType());

    	$form->handleRequest( $request);

    	if( $form->isValid())
    	{
    		$em = $this->getDoctrine()->getManager();

    		$data = $form->getData();

    		$avatar = $data->getAvatar();
    		
    		$name = $avatar->getClientOriginalName();

    		preg_match('/\.\w+$/', $name , $match);
    		
    		if( isset ($match[0]))
    		{
    			$upyun = $this->get('upload.upyun');

    			$file = $this->container->get('security.context')->getToken()->getUser()->getId().$match[0];

			    
			    $opts = array(
			        $upyun::X_GMKERL_TYPE    => 'square', // 缩略图类型
			        $upyun::X_GMKERL_VALUE   => 200, // 缩略图大小
			        $upyun::X_GMKERL_QUALITY => 100, // 缩略图压缩质量
			        $upyun::X_GMKERL_UNSHARP => True // 是否进行锐化处理
			    );
			    $fh = fopen( $avatar->getRealPath() , 'rb');
			    $rsp = $this->get('upload.upyun')->writeFile('/avatar/'.$file, $fh, True, $opts); 
			    fclose($fh);
			   	
			   	$userId = $this->container->get('security.context')->getToken()->getUser()->getId();

			   	if( $avatar = $this->getDoctrine()->getRepository('McSettingBundle:Avatar')->findOneByUserId( $userId ) )
			   	{
				   	$avatar->setAvatar($file);
				
				}else
				{
					$avatar = new Avatar();
				   	$avatar->setUserId( $userId );
				   	$avatar->setAvatar($file);
				}

			   	$em->persist( $avatar);
			   	$em->flush();


    		}
    	}


    	return $this->render('McSettingBundle:Avatar:photo.html.twig' , array('form' => $form->createView()));
    }

    public function uploadAction()
    {

    	$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
    		
    	$data = $request->request;

    	var_dump( $data);
    	/*
    	$d = $this->get('upload.upyun');
    	var_dump( $d);
    	*/
    	return new \Symfony\Component\HttpFoundation\Response('' , 200);
    }

}
