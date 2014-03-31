<?php

namespace Mc\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;

class DashboardController extends Controller
{
    public function showAction()
    {	
    	$navigator = array(
    		'修改形象' => 'setting_avatar' , 
    		'修改资料' => 'fos_user_profile_edit' , 
    		'修改密码' => 'fos_user_change_password' , 
    	);
    	return $this->render('McModuleBundle:Dashboard:show.html.twig' , array('navigator' => $navigator));
    }
}