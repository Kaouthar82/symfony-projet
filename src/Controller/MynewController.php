<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MynewController extends AbstractController
{
    #[Route('/mynew', name: 'app_mynew')]
    public function index(): Response
    {
        return $this->render('mynew/index.html.twig', [
            'controller_name' => 'MynewController',
        ]);
    }
}

#[Route('/greet/{name}', name: 'greet', defaults: ['name' => 'World'])]
public function greet(string $name): Response
{
    return new Response("<h1>Hello, $name!</h1>");
}

