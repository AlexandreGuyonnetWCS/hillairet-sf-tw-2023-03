<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function index(CategoryRepository $categories): Response
    {
        return $this->render('commons/_categories.html.twig', [
            'categories' => $categories->findAll(),
        ]);
    }
}
