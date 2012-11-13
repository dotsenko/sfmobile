<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dotsenko
 * Date: 11/9/12
 * Time: 10:38 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Mobile\FrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactsType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {

        $builder->add('fname');
        $builder->add('lname');
        $builder->add('email','email');
        $builder->add('phone');
        $builder->add('message','text');

    }

    public function getName()
    {
        return 'contact_form';
    }
}