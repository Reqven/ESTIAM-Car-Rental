<?php
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
        $data = array(
            "dump allows you to inspect any variable's",
            "content at a time on the front end"
        );
        dump($data);

        return $this->render('dev.html.twig', [
            'myData' => $data
            // insert in this array the data variables
            // needed for the twig template
        ]);
    }

    
}
