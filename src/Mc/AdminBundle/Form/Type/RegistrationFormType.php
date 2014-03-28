<?php

namespace Mc\AdminBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
	public function buildForm( FormBuilderInterface $builder , array $option )
	{
		$builder->add('name')
		        ->add('job')
		        ->add('qq')
		        ;
	}

	public function getName()
	{
		return 'mc_user_registration';
	}
}