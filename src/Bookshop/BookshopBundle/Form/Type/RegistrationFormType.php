<?php

namespace Bookshop\BookshopBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('mobile');
        $builder->add('gender', 'choice', array(
            'choices' => array("Male", "Female"),
            'expanded' => true,
            'multiple' => false,
            'required' => true,
            'data' => '0'
        ));
    }

    public function getName()
    {
        return 'bookshop_user_registration';
    }
}