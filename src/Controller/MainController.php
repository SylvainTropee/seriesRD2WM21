<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class MainController extends AbstractController
{
    #[Route('', name: 'main_home')]
    public function home(): Response
    {

        return $this->render('main/home.html.twig');

    }

    #[Route('/test', name: 'main_test')]
    public function test(SerializerInterface $serializer, HttpClientInterface $client): Response
    {
        $serie = ['name' => 'Dragon Ball Z', 'author' => 'Toriyamaha', 'nbEpisode' => 291];

        $username = '<h1>Sylvain</h1>';

        //récupération depuis une API
        $joke = file_get_contents("https://api.chucknorris.io/jokes/random");
        $joke = json_decode($joke, true);
        dump($joke['value']);

//        $joke = $client->request('GET', "https://api.chucknorris.io/jokes/random")->toArray();
//        dump($joke);


//       dump($serializer->deserialize($joke, \stdClass::class, 'json'));

        return $this->render('main/test.html.twig', [
            'mySerie' => $serie,
            'date' => new \DateTime(),
            'username' => $username
        ]);

    }
}









