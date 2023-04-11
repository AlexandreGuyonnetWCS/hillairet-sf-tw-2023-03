<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\CategoryImage;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public const CATEGORIES = [
        [
            'name' => 'Terrasse Bois',
            'slug' => 'terrasse-bois',
            'isFavorite' => true,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2012/08/06/01/08/garden-terrace-53785_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
            ],
        ],
        [
            'name' => 'Cuisine Aménagée',
            'slug' => 'cuisine-aménagée',
            'isFavorite' => true,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/12/30/07/59/kitchen-1940174_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/12/30/07/59/kitchen-1940174_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/12/30/07/59/kitchen-1940174_960_720.jpg',
                ],
            ],
        ],
        [
            'name' => 'Fermeture, Portail',
            'slug' => 'fermeture-portail',
            'isFavorite' => false,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/10/01/14/58/goal-1707702_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
            ],
        ],
        [
            'name' => 'Charpente, Escalier, Parquet',
            'slug' => 'charpente-escalier-parquet',
            'isFavorite' => false,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/10/01/14/58/goal-1707702_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
            ],
        ],
        [
            'name' => 'Aménagement Intérieur',
            'slug' => 'aménagement-intérieur',
            'isFavorite' => false,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2017/03/22/17/39/kitchen-2165756_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
            ],
        ],
        [
            'name' => 'Maison ossature bois',
            'slug' => 'maison-ossature-bois',
            'isFavorite' => false,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/16/12/55/winter-1828779_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
            ],
        ],
        [
            'name' => 'Isolation',
            'slug' => 'isolation',
            'isFavorite' => false,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2017/11/06/23/11/casa-antica-2925168_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
            ],
        ],
        [
            'name' => 'Menuiserie bois, PVC, Aluminium',
            'slug' => 'menuiserie-bois-pvc-aluminium',
            'isFavorite' => false,
            'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
            du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
            L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
            possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
            du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
            vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
            (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
            'image' => [
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2017/08/01/09/34/white-2563976_1280.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
                [
                    'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
                ],
            ],
        ],
        // [
        //     'name' => 'Meuble de salle de bains',
        //     'slug' => 'meuble-de-salle-de-bains',
        //     'isFavorite' => false,
        //     'description' => "`On sait depuis longtemps que travailler avec du texte lisible et contenant
        //     du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
        //     L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il
        //     possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle
        //     du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
        //     ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum'
        //     vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
        //     Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement
        //     (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).`",
        //     // 'image' => [
        //     //     [
        //     //         'picture' => 'https://cdn.pixabay.com/photo/2017/03/22/17/39/kitchen-2165756_960_720.jpg',
        //     //     ],
        //     //     [
        //     //         'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
        //     //     ],
        //     //     [
        //     //         'picture' => 'https://cdn.pixabay.com/photo/2016/11/29/05/45/terrace-1867613_960_720.jpg',
        //     //     ],
        //     // ],
        // ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $categoryData) {
            $category = new Category();
            $category->setName($categoryData['name']);
            $category->setSlug($categoryData['slug']);
            $category->setIsFavorite($categoryData['isFavorite']);
            $category->setDescription($categoryData['description']);
            foreach ($categoryData['image'] as $image) {
                $categoryImage = new CategoryImage();
                $categoryImage->setPicture($image['picture']);
                $categoryImage->setCategory($category);
                $manager->persist($categoryImage);
            }
            $manager->persist($category);
        }

        $manager->flush();
    }
}
