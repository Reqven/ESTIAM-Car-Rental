<?php
namespace App\Controller;

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepageRoute()
    {
        return $this->render('shit.html.twig', []);
    }

    /**
     * @Route("/dev", name="dev")
     */
    public function devRoute()
    {
        dump('dev');
        return $this->render('base.html.twig');
    }
}