<?php
namespace App\Controller;

use App\Entity\Booking;
use App\Entity\Vehicule;
use App\Entity\Employee;
use App\Entity\Customer;
use App\Entity\Place;
use App\Form\BookingType;
use App\Model\QuickSearch;
use App\Form\QuickSearchType;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\DeserializationContext;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class DefaultController extends AbstractController
{
    private $entityManager;
    private $serializer;
    private $session;

    public function __construct(EntityManagerInterface $entityManager, SerializerInterface $serializer, SessionInterface $session)
    {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
        $this->session = $session;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function homepage(Request $request)
    {
        $form = $this->createForm(QuickSearchType::class, new QuickSearch());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $booking = $this->getFromSession() ?? new Booking();
            $booking->setDateStart($form->get('date_start')->getData());
            $booking->setDateEnd($form->get('date_end')->getData());

            $this->saveToSession($this->serialize($booking));
            return $this->redirectToRoute('vehicules');
        }
        return $this->render('homepage.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/account", name="account")
     */
    public function account()
    {
        return $this->render('account.html.twig');
    }


    private function serialize(Booking $booking): string
    {
        $context = SerializationContext::create()->setGroups(array('booking'));
        $json = $this->serializer->serialize($booking, 'json', $context);
        return $json;
    }

    private function getFromSession(): ?Booking
    {
        if ($bookingSerialized = $this->session->get('_booking')) {
            $context = DeserializationContext::create()->setGroups(array('booking'));
            $booking = $this->serializer->deserialize($bookingSerialized, Booking::class, 'json', $context);
            return $booking;
        }
        return null;
    }

    private function saveToSession($data)
    {
        $this->session->set('_booking', $data);
        $this->session->save();
    }
}
