<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProjectImageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    #[Route('/legals', name: 'legals')]
    public function legals(): Response
    {
        return $this->render('pages/legals.html.twig');
    }

    #[Route('/sitemap', name: 'sitemap')]
    public function sitemap(CategoryRepository $categories): Response
    {
        return $this->render('pages/sitemap.html.twig', [
            'categories' => $categories->findAll(),
        ]);
    }

    #[Route('/credits', name: 'credits')]
    public function credits(
        ProjectImageRepository $pImageRepository,
        CategoryRepository $categoryRepository
    ): Response {
        return $this->render('pages/credits.html.twig', [
            'projectImages' => $pImageRepository->findAll(),
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
