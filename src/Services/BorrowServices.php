<?php

namespace App\Services;

use App\Entity\Game;
use App\Entity\History;
use App\Entity\User;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;

class BorrowServices
{
    public function __construct(
        private EntityManagerInterface $em,
    )
    {

    }

    public function borrow(int $id, User $user) : void
    {
        $game = $this->em->getRepository(Game::class)->findOneBy(['id' => $id]);

        $game->setBorrower($user);

        $this->constructHistory($user, $game);

        $this->em->flush();
    }

    public function constructHistory(User $user, Game $game) : void 
    {
        $date = new DateTimeImmutable;
        $history = new History;

        $history->setStartDate($date);
        $history->setEndDate(new DateTimeImmutable('tomorrow')); //TODO: change this with a date in a form
        $history->setBorrower($user);
        $history->setGame($game);

        $this->em->persist($history);
        $this->em->flush();
    }
}
