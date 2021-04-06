<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name?world}", name="hello")
     */
    public function hello($name = "World",Environment $twig)
    {
        $html = $twig->render('hello.html.twig', [
            'name' => $name,
            'age' => 33,
            'prenoms' => [
                'Mika',
                'Aude',
                'Louwenn'
            ],
            'ages' => [
                12,
                18,
                29,
                15,
            ],
            'formateur1' => [
                'prenom' => 'Mika',
                'nom' => 'BEQUET',
                'age' => 31,
                'slogan' => 'per aspera ad astra'
            ],
            'formateur2' => [
                'prenom' => 'Aude',
                'nom' => 'CELERIER',
                'age' => 31,
                'slogan' => 'les pandas sont nos amis on y touche pas'
            ]
        ]);
        return new Response ($html);
    }
}