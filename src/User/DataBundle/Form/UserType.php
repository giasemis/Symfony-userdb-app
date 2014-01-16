<?php
// src/User\DataBundle/Form/UserType.php

namespace User\DataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username','text');
		 $builder->add('RegistrationDate','date',array('data' => new \DateTime()));
		 
        
    }

    public function getname()
    {
        return 'adduser';
    }
}