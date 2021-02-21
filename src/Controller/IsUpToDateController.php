<?php

namespace App\Controller;

use App\Repository\BilletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IsUpToDateController extends AbstractController
{
    /**
     * @Route("/isupdate", name="is_up_to_date")
     * @param BilletRepository $billetRepository
     * @return Response
     */
    public function index(BilletRepository $billetRepository): Response
    {
        return $this->render('is_up_to_date/index.html.twig', [
            'billets' => $billetRepository->findAll()
        ]);
    }
}
