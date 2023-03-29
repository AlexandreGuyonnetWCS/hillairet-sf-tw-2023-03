<?php

namespace App\Controller\Admin;

use App\Entity\CategoryImage;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoryImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoryImage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('picture', 'Image')
                ->setBasePath('uploads/category/')
                ->setUploadDir('public/uploads/category')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }
}
