<?php

namespace Mc\AdminBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
	public function buildForm( FormBuilderInterface $builder , array $option )
	{
		parent::buildForm($builder, $option);
		
		$builder->add('name' , 'text' , array('label'=>'真实姓名'))
		        ->add('job' , 'text' , array('label'=>'工作'))
		        ->add('qq' , 'text' , array('label'=>'QQ号'))
		        ;
	}

	public function getName()
	{
		return 'mc_user_registration';
	}
}