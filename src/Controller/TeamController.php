<?php

namespace App\Controller;

use App\Repository\TeamRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TeamController extends AbstractController
{
    public function team(TeamRepository $team): Response
    {
        return $this->render('components/_team.html.twig', [
            'teams' => $team->findAll(),
        ]);
    }
}
