<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('series', name: 'series_')]
final class SerieController extends AbstractController
{
    #[Route('', name: 'list')]
    public function list(): Response
    {
        //TODO renvoyer la liste des séries !
        return $this->render('serie/list.html.twig');
    }

    #[Route('/{id}', name: 'show', requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        dump($id);

        //TODO renvoyer une série !
        return $this->render('serie/show.html.twig');
    }

    #[Route('/create', name: 'create', methods: ['POST', 'GET'])]
    public function create(): Response
    {
        //TODO renvoyer un formulaire de création de série
        return $this->render('serie/create.html.twig');
    }
}











