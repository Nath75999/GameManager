<?php

namespace App\Services;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;

class DetailsServices
{
    public function __construct(
        private EntityManagerInterface $em,
    )
    {
        
    }

    public function getGameFromSlug(string $slug) : ?Game
    {
        return $this->em->getRepository(Game::class)->findOneBy(['slug' => $slug]);
    }
}
