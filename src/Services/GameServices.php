<?php

namespace App\Services;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;

class GameServices
{
    public function __construct(
        private EntityManagerInterface $em,
    )
    {
        
    }

    public function getGames() : array
    {
        return $this->em->getRepository(Game::class)->findAll();
    }
}
