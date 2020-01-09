<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Booking;
use App\Entity\Vehicule;
use App\Form\PlaceType;
use App\Form\DatePickerType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type as Types;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\RequestStack;

class BookingType extends AbstractType
{
    private $requestStack;
    private $entityManager;
    private $session;
    private $request;
    
    public function __construct(EntityManagerInterface $entityManager, SessionInterface $session, RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
        $this->entityManager = $entityManager;
        $this->session = $session;
        $this->request = $this->requestStack->getCurrentRequest();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $booking = new Booking();
        $route = $this->request->get('_route');
        if (array_key_exists('data', $options)) {
            $booking = $options['data'];
        }

        $builder
            ->add('date_start', DatePickerType::class)
            ->add('date_end', DatePickerType::class);
        
        if ($booking->getDateStart() && $booking->getDateEnd()) {
            $builder
                ->add('vehicules', EntityType::class, [
                    'class' => Vehicule::class,
                    'multiple' => true,
                    'choice_label' => 'numberplate',
                    'required' => false
                    ]);
        }
        
        
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
            //dump($event->getData());
            
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function(FormEvent $event) {
            //dump('post', $event);
            
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
            'choice_translation_domain' => false
        ]);
    }
}
