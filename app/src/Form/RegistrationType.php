<?php

namespace App\Form;

use App\Entity\Peoples;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('Date_Naissance')
            ->add('num_voie')
            ->add('nom_rue')
            ->add('code_postale')
            ->add('ville')
            ->add('portable')
            ->add('email')
            ->add('password', PasswordType::class)
            ->add('confirm_password',PasswordType::class)
            ->add('clients')
            ->add('employees')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Peoples::class,
        ]);
    }
}
