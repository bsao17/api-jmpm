<?php

namespace App\Controller;

use App\Repository\BilletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index(BilletRepository $repositoryBillet): Response
    {
        return $this->render('articles/index.html.twig', [
            'billets' => $repositoryBillet->findAll(),
        ]);
    }
}
