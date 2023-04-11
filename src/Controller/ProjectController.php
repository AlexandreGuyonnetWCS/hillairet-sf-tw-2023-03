<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    public function project(ProjectRepository $projects): Response
    {
        return $this->render('components/_project.html.twig', [
            'projects' => $projects->findAll(),
        ]);
    }

    #[Route('/project/{slug}', name: 'project')]
    public function show(ProjectRepository $projects, string $slug): Response
    {
        return $this->render('pages/project.html.twig', [
            'project' => $projects->findOneBySlug($slug),
        ]);
    }
}
