<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response("coucou !");
    }

    /**
     * @Route("/Hello/{name<.+>?Dude}")
     */
    public function Hello(Request $request, $name)
    {
        return $this->render(
            'hello.html.twig',
            [
                'name' => $name,
            ]
        );
    }
}
