<?php

namespace App\Controller;

use App\Entity\Figures;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FiguresController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'figures_list')]
    public function listFigures(): Response
    {
        $figures = $this->entityManager->getRepository(Figures::class)->findAll();

        return $this->render('figures/list.html.twig', [
            'figures' => $figures,
        ]);
    }
}
