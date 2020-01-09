<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Customer;
use App\Form\PlaceType;
use App\Form\DatePickerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type as Types;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = new Customer();
        if (array_key_exists('data', $options)) {
            $user = $options['data'];
        }
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('place', PlaceType::class)
            ->add('date_birth', DatePickerType::class)
            ->add('phone')
            ->add('email');

            if ($user instanceof Customer) {
                //$builder->add('credit_card');
            }

            if ($user instanceof Employee) {
                $builder
                    ->add('agency')
                    ->add('poste');
            }
            
            if (!$user->getId()) {
                $builder->add(
                    'password', Types\RepeatedType::class, array(
                        'type' => Types\PasswordType::class,
                        'first_options' => array('label' => 'Password'),
                        'second_options' => array('label' => 'Confirm'),
                        'invalid_message' => 'Passwords do not match'
                    )
                );
            }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}
