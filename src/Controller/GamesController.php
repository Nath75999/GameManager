<?php

namespace App\Controller;

use App\Services\GameServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GamesController extends AbstractController
{
    public function __construct(
        private GameServices $gameServices,
    )
    {

    }
    #[Route('/games', name: 'app_games')]
    public function index(): Response
    {
        return $this->render('games/index.html.twig', 
            [
                'games' => $this->gameServices->getGames(),
            ]
        );
    }
}
