<?php
namespace App\Controller;

use App\Entity\Booking;
use App\Form\BookingType;
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

class BookingController extends AbstractController
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
     * @Route("/booking/create", name="booking_create")
     */
    public function bookingCreate(Request $request)
    {
        $booking = $this->getFromSession() ?? new Booking();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hasVehiculeForm = $form->has('vehicules');
            $booking = $form->getData();
            $form = $this->createForm(BookingType::class, $booking);

            $this->saveToSession($this->serialize($booking));

            if ($booking->isReady() && $hasVehiculeForm) {
                return $this->redirectToRoute('booking_create_confirm');
            }
        }
        return $this->render('booking.create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/booking/create/confirm", name="booking_create_confirm")
     */
    public function bookingCreateConfirm(Request $request)
    {
        $booking = $this->getFromSession();
        if (!$booking || !$booking->isReady()) {
            return $this->redirectToRoute('booking_create');
        }
        $booking->calculate();
        return $this->render('booking.confirm.html.twig', array(
            'booking' => $booking
        ));
    }

    /**
     * @Route("/booking/create/checkout", name="booking_create_checkout")
     */
    public function bookingCreateCheckout(Request $request)
    {
        $booking = $this->getFromSession();
        if (!$booking || !$booking->isReady()) {
            return $this->redirectToRoute('booking_create');
        }
        $booking->calculate();
        $booking->setStatus('waiting');
        $booking->setDateBooked(new \DateTime());
        $booking->setCustomer($this->getUser());

        $this->entityManager->persist($booking);
        $this->entityManager->flush();
        $this->saveToSession(null);

        return $this->render('booking.done.html.twig', array(
            'booking' => $booking
        ));
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
