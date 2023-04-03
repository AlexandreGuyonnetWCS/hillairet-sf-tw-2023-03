<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Projet')
            ->setEntityLabelInPlural('Projets')
            ->setSearchFields(['id', 'name', 'description', 'place', 'created_at'])
            ->setPaginatorPageSize(10);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom')
                ->setRequired(true),
            TextareaField::new('description', 'Description')
                ->setRequired(true),
            TextField::new('place', 'Lieu du chantier')
                ->setRequired(false),
            DateTimeField::new('createdAt', 'Date de création')
                ->setRequired(false),
            CollectionField::new('image', 'Images')
                ->useEntryCrudForm(),
            SlugField::new('slug', 'Slug')
                ->setTargetFieldName('name')
                ->setRequired(true)
                ->setHelp('Le slug est généré automatiquement à partir du nom du projet'),
        ];
    }
}
