<?php

namespace App\Controller\Admin;

use App\Entity\ProjectImage;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjectImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProjectImage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('picture', 'Image')
                ->setBasePath('uploads/project/')
                ->setUploadDir('public/uploads/project')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
                ->setHelp('L\'image ne doit pas dépasser 2Mo'),
            TextField::new('credits', 'Crédits photos')
                ->setRequired(false),
        ];
    }
}
