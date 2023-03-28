<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    public function project(ProjectRepository $projects): Response
    {
        return $this->render('components/_project.html.twig', [
            'projects' => $projects->findAll(),
        ]);
    }
}
