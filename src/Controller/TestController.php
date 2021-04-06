<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        dd("Ca marche !");
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test")
     * methods={"GET", "POST"},
     * host="localhost", schemes={"http", "https"}
     */
    public function test(Request $request, $age)
    {
        dump($request);
        return new Response("Vous avez $age ans !");
    }
}
