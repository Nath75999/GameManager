<?php

namespace App\Services;

use App\Entity\Game;
use App\Entity\History;
use App\Entity\User;
use DateTime;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;

class BorrowServices
{
    public function __construct(
        private EntityManagerInterface $em,
    )
    {

    }

    public function borrow(int $id, User $user, $dateStart, $dateEnd) : void
    {
        $dateStart = new DateTime($dateStart);
        $dateEnd = new DateTime($dateEnd);  

        $game = $this->em->getRepository(Game::class)->findOneBy(['id' => $id]);

        if (!$game || $game->getBorrower() != null) return;

        $game->setBorrower($user);

        $this->constructHistory($user, $game, $dateStart, $dateEnd);

        $this->em->flush();
    }

    public function constructHistory(User $user, Game $game, $dateStart, $dateEnd) : void 
    {
        $history = new History;

        $history->setStartDate(DateTimeImmutable::createFromMutable($dateStart)); 
        $history->setEndDate(DateTimeImmutable::createFromMutable($dateEnd)); 
        $history->setBorrower($user);
        $history->setGame($game);

        $this->em->persist($history);
    }
}
