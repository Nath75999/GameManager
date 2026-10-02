<?php

namespace App\Controller;

use App\Services\BorrowServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function borrow(int $id, Request $request): Response
    {
        $user = $this->getUser();
        $dateStart = $request->request->get('date_start');
        $dateEnd= $request->request->get('date_end');

        $this->services->borrow($id, $this->getUser(), $dateStart, $dateEnd);

        return new Response();
    }
}
