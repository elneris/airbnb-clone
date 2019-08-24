<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="hello")
     * @return Response
     */
    public function hello($name = "...")
    {
        return new Response("bonjour $name");
    }
    
    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        $names = ["Lior" => 31, "Elneris" => 29];

        return $this->render('home.html.twig', [
            'title' => 'Bonjour',
            'age' => 12,
            'names' => $names
        ]);
    }
}
