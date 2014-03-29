<?php

namespace Mc\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UnitType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject')
            ->add('outline')
            ->add('ppt')
            ->add('playPath')
            ->add('playFile')
            ->add('keywords' , 'textarea')
            ->add('level')
            ->add('time')
            ->add('language')
            ->add('view')
            ->add('programId' , 'entity' , array(
                'class' => 'McAdminBundle:Program' , 
                'property' => 'subject'
            ))
            ->add('createdDate')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mc\AdminBundle\Entity\Unit'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mc_adminbundle_unit';
    }
}
