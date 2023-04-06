<?php

namespace App\Controller\Admin;

use App\Entity\Team;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TeamCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Team::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Membre de l\'équipe')
            ->setEntityLabelInPlural('Membres de l\'équipe')
            ->setPageTitle('index', 'Liste des membres de l\'équipe')
            ->showEntityActionsInlined()
            ->setSearchFields(['id', 'firstName'])
            ->setDefaultSort(['id' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('firstName', 'Prénom')
                ->setRequired(true),
            ImageField::new('picture', 'Photo')
                ->setBasePath('uploads/team/')
                ->setUploadDir('public/uploads/team')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextareaField::new('summary', 'Description')
                ->setRequired(false)
                ->setHelp('La description doit faire moins de 255 caractères'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->add(Crud::PAGE_INDEX, 'detail')
        ->update(Crud::PAGE_INDEX, 'detail', function (Action $action) {
            return $action->setLabel('voir')->setIcon('fa fa-eye');
        });
    }
}
