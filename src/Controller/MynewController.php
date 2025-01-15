<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MynewController extends AbstractController
{
    #[Route('/hello', name: 'app_hello')]
    public function hello(): Response
    {
        return new Response('<h1>Hello World!</h1>');
    }

    #[Route('/hello/{name}', name: 'app_hello_dynamic')]
    public function helloDynamic(string $name): Response
    {
        return new Response("<h1>Hello, $name!</h1>");
    }

    #[Route('/number/{number}', name: 'app_number', requirements: ['number' => '\d+'])]
    public function showNumber(int $number): Response
    {
        return new Response("<h1>Le numéro est : $number</h1>");
    }
    #[Route('/twig-example', name: 'app_twig_example')]
    public function twigExample(): Response
    {
    return $this->render('mynew/index.html.twig', [
        'message' => 'Bienvenue sur Twig avec Symfony',
    ]);
}

}



