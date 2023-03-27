<?php

namespace App\Controller\Admin;

use App\Entity\Team;
use App\Entity\Project;
use App\Entity\Category;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {
        return $this->render('pages/admin.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Hillairet menuiserie');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour sur le site', 'fas fa-home', 'home');
        yield MenuItem::section('');
        yield MenuItem::linkToCrud('Gestion des catégories', 'fas fa-list', Category::class);
        yield MenuItem::section('');
        yield MenuItem::linkToCrud('Gestion de l\'équipe', 'fas fa-users', Team::class);
        yield MenuItem::section('');
        yield MenuItem::linkToCrud('Gestion des projets', 'fas fa-project-diagram', Project::class);
    }
}
