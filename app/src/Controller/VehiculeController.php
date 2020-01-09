<?php
namespace App\Controller;

use App\Entity\Booking;
use App\Entity\Vehicule;
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

class VehiculeController extends AbstractController
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
     * @Route("/vehicules", name="vehicules")
     */
    public function index()
    {
        $repository = $this->entityManager->getRepository(Vehicule::class);

        return $this->render('vehicules.html.twig', array(
            'vehicules' => $repository->findAll(),
            'categories' => $repository->findCategories(),
            'brands' => $repository->findPopularBrands()
        ));
    }

    /**
     * @Route("/vehicule/{id}", name="vehicule_show")
     */
    public function show(Request $request, Vehicule $vehicule)
    {
        return $this->render('vehicule.show.html.twig', array(
            'vehicule' => $vehicule,
            'booking' => $this->getFromSession()
        ));
    }

    /**
     * @Route("/vehicule/{id}/add", name="vehicule_add")
     */
    public function add(Request $request, Vehicule $vehicule = null)
    {       
        if (!$vehicule) {
            return $this->redirectToRoute('vehicules');
        }
        $booking = $this->getFromSession() ?? new Booking();
        if (!$booking->getVehicules()->contains($vehicule)) {
            $booking->addVehicule($vehicule);
        }
        $this->saveToSession($this->serialize($booking));
        return $this->redirectToRoute('booking_create');
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
