<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
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
            ->renderContentMaximized()
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
            TextEditorField::new('description', 'Description')
                ->setRequired(true),
            ImageField::new('Image', 'Image')
                ->setBasePath('uploads/category/')
                ->setUploadDir('public/uploads/category')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setHelp('L\'image ne doit pas dépasser 2Mo'),
            TextField::new('credits', 'Crédits photos'),
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
