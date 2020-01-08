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
            dump($error);
            return $this->render('security/login.html.twig', [
                'error' => $error
            ]);
        }
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){
        $user = new Customer();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $password = $form->get('password')->getNormData();
            $password = $encoder->encodePassword($user, $password);
            $user->setPassword($password);

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('login');
        }
        return $this->render('security/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}