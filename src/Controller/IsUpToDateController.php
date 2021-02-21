<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IsUpToDateController extends AbstractController
{
    /**
     * @Route("/isupdate", name="is_up_to_date")
     */
    public function index(): Response
    {
        return $this->render('is_up_to_date/index.html.twig', [
            'controller_name' => 'IsUpToDateController',
        ]);
    }
}
