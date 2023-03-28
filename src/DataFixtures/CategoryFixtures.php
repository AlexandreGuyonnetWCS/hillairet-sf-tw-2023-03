<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public const CATEGORIES = [
        [
            'name' => 'Terrasse Bois',
            'image' => 'https://cdn.pixabay.com/photo/2012/08/06/01/08/garden-terrace-53785_960_720.jpg',
            'summary' => 'Les terrasses en bois sont très prisées pour leur
            aspect naturel et leur facilité d\'entretien. 
            Elles sont aussi très résistantes et peuvent être installées sur tous les types de sols.'
        ],
        [
            'name' => 'Cuisine Aménagée',
            'image' => 'https://cdn.pixabay.com/photo/2016/12/30/07/59/kitchen-1940174_960_720.jpg',
            'summary' => 'La cuisine est la pièce maîtresse de la maison.
            Elle doit être à la fois fonctionnelle et esthétique.
            Nous vous proposons des cuisines sur mesure, adaptées à vos besoins et à votre budget.'
        ],
        [
            'name' => 'Fermeture, Portail',
            'image' => 'https://cdn.pixabay.com/photo/2016/10/01/14/58/goal-1707702_960_720.jpg',
            'summary' => 'Les fermetures sont des éléments essentiels de la maison.
            Elles doivent être à la fois esthétiques et fonctionnelles.
            Nous vous proposons des portes, fenêtres, volets,
            portails sur mesure.'
        ],
        [
            'name' => 'Charpente, Escalier, Parquet',
            'image' => 'https://cdn.pixabay.com/photo/2018/10/06/17/27/staircase-3728350_960_720.jpg',
            'summary' => 'La charpente est un élément essentiel de la maison.
            Elle doit être à la fois esthétique et fonctionnelle.
            Nous vous proposons des charpentes sur mesure.'
        ],
        [
            'name' => 'Aménagement Intérieur',
            'image' => 'https://cdn.pixabay.com/photo/2017/03/22/17/39/kitchen-2165756_960_720.jpg',
            'summary' => 'L\'aménagement intérieur est un élément essentiel de la maison.
            Il doit être à la fois esthétique et fonctionnel.
            Nous vous proposons des aménagements intérieurs sur mesure, adaptés à vos besoins et à votre budget.'
        ],
        [
            'name' => 'Maison ossature bois',
            'image' => 'https://cdn.pixabay.com/photo/2016/11/16/12/55/winter-1828779_960_720.jpg',
            'summary' => 'La maison ossature bois est un élément essentiel de la maison.
            Elle doit être à la fois esthétique et fonctionnelle.
            Nous vous proposons des maisons ossature bois sur mesure, adaptées à vos besoins et à votre budget.'
        ],
        [
            'name' => 'Isolation',
            'image' => 'https://cdn.pixabay.com/photo/2017/11/06/23/11/casa-antica-2925168_960_720.jpg',
            'summary' => 'L\'isolation est un élément essentiel de la maison.
            Elle doit être à la fois esthétique et fonctionnelle.
            Nous vous proposons des isolations sur mesure, adaptées à vos besoins et à votre budget.'
        ],
        [
            'name' => 'Menuiserie bois, PVC, Aluminium',
            'image' => 'https://cdn.pixabay.com/photo/2017/08/01/09/34/white-2563976_1280.jpg',
            'summary' => 'La menuiserie est un élément essentiel de la maison.
            Elle doit être à la fois esthétique et fonctionnelle.
            Nous vous proposons des menuiseries sur mesure, adaptées à vos besoins et à votre budget.'
        ],
        [
            'name' => 'Meuble de salle de bains',
            'image' => 'https://cdn.pixabay.com/photo/2016/11/23/00/56/bathroom-1851566_960_720.jpg',
            'summary' => 'Le meuble de salle de bains est un élément essentiel de la maison.
            Il doit être à la fois esthétique et fonctionnel.
            Nous vous proposons des meubles de salle de bains sur mesure, adaptés à vos besoins et à votre budget.'
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $categoryData) {
            $category = new Category();
            $category->setName($categoryData['name']);
            $category->setImage($categoryData['image']);
            $category->setSummary($categoryData['summary']);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
