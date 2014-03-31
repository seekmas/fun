<?php

namespace Mc\SettingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AvatarType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('avatar' , 'file' , array('label' => '从电脑中选择我的照片') )
            ->add('update' , 'submit' , array('label'=>'更新头像'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mc\SettingBundle\Entity\Avatar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mc_settingbundle_avatar';
    }
}
