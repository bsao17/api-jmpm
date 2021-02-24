<?php

namespace App\Controller;

use App\Entity\Billet;
use App\Form\CreateBilletType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateController extends AbstractController
{
    /**
     * @Route("/create", name="admin_create")
     * @param FormFactoryInterface $factory
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function Create(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(CreateBilletType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();

            $em->persist($data);
        }
        $em->flush();

        return $this->render('create/index.html.twig', [
            'formView' => $form->createView()
        ]);
    }
}
