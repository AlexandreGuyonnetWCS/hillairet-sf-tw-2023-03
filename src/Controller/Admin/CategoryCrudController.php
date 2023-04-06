<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Prestation')
            ->setEntityLabelInPlural('Prestations')
            ->setPageTitle('index', 'Liste des prestations')
            ->showEntityActionsInlined()
            ->setSearchFields(['id', 'name', 'image', 'summary'])
            ->setPaginatorPageSize(10);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom')
                ->setRequired(true),
            BooleanField::new('isFavorite', 'Favoris')
                ->setRequired(false)
                ->hideOnForm(),
            TextareaField::new('summary', 'Résumé')
                ->setRequired(false)
                ->setHelp('La résumé doit faire moins de 180 caractères'),
            TextEditorField::new('description', 'Description')
                ->setRequired(true),
            CollectionField::new('image', 'Images')
                ->useEntryCrudForm(),
            SlugField::new('slug', 'Slug')
                ->setTargetFieldName('name')
                ->setRequired(true)
                ->setHelp('Le slug est généré automatiquement à partir du nom de la prestation'),
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
