<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Customer;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    private $entityManager;
    private $encoder;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder)
    {
        $this->entityManager = $entityManager;
        $this->encoder = $encoder;
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $auth)
    {       
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('homepage');
        }
        if ($error = $auth->getLastAuthenticationError()) {
            //May need to implement translations here
            //$username = $authUtils->getLastUsername();
            //$this->addFlash('error', $error->getMessageKey());
            return $this->render('security/login.html.twig', [
                'error' => $error
            ]);
        }
        return $this->render('security/login.html.twig');
    }


    /**
     * @Route("/register/individual", name="register_individual")
     */
    public function registerIndividual(Request $request)
    {
        return $this->register($request, new Customer());
    }

    /**
     * @Route("/register/professional", name="register_professional")
     */
    public function registerProfessional(Request $request)
    {
        return $this->register($request, new Customer());
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, User $user)
    {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('homepage');
        }
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $password = $form->get('password')->getNormData();
            $password = $this->encoder->encodePassword($user, $password);
            $user->setPassword($password);

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $this->redirectToRoute('login');
        }
        return $this->render('security/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin(Request $request)
    {
        $repository = $this->entityManager->getRepository(Booking::class);
        return $this->render('admin.html.twig', array(
            'bookings' => $repository->findAll()
        ));
    }
}