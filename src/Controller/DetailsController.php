<?php

namespace App\Controller;

use App\Services\DetailsServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Attribute\Route;

final class DetailsController extends AbstractController
{
    public function __construct(
        private DetailsServices $services,
    )
    {

    }

    #[Route('/details/{slug}', name: 'app_details')]
    public function index(string $slug): Response
    {
        $game = $this->services->getGameFromSlug(($slug));

        if (!$game)  throw new NotFoundHttpException();
        
        return $this->render('details/index.html.twig', [
                'game' => $game,
            ]);
    }
}
