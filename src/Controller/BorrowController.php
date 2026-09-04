<?php

namespace App\Controller;

use App\Services\BorrowServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BorrowController extends AbstractController
{
    public function __construct(
        private BorrowServices $services,
    )
    {

    }

    #[Route('/borrow/{id}', name: 'borrow', methods: ['POST'])]
    public function borrow(int $id): Response
    {
        $user = $this->getUser();

        // if ($user) dd($user);

        $this->services->borrow($id, $this->getUser());

        return new Response();
    }
}
