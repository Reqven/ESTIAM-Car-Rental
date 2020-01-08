<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Customer;
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
            ->add('Nom')
            ->add('Prenom')
            ->add('Date_Naissance')
            ->add('num_voie')
            ->add('nom_rue')
            ->add('code_postale')
            ->add('ville')
            ->add('portable')
            ->add('email');

            if ($user instanceof Customer) {
                $builder->add('carte_credit');
            }

            if ($user instanceof Employee) {
                $builder
                    ->add('id_agence')
                    ->add('poste');
            }

            if (!$user->getId()) {
                $builder->add(
                    'password', Types\RepeatedType::class, array(
                        'type' => Types\PasswordType::class,
                        'mapped' => false,
                        'first_options' => array(
                            'label' => 'Password'
                        ),
                        'second_options' => array(
                            'label' => 'Confirm',
                        )
                    )
                );
            }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
