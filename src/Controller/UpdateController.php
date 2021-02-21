<?php

namespace App\Controller;

use App\Repository\BilletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateController extends AbstractController
{
    /**
     * @Route("/update", name="admin_update")
     */
    public function index(BilletRepository $repositoryBillet): Response
    {
        return $this->render('create/create.html.twig', [
            'billets' => $repositoryBillet->findAll(),
        ]);
    }
}
