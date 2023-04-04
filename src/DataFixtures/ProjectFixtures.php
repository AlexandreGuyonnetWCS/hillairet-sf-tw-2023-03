<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProjectFixtures extends Fixture
{
    public const PROJECTS = [
        [
            'name' => 'Rénovation de la salle de bain',
            'slug' => 'renovation-de-la-salle-de-bain',
            'description' => 'Nous avons fait appel à l\'entreprise Lexica pour la rénovation de notre salle de bain.
            Nous avons été très satisfaits du travail réalisé.
            Les travaux ont été réalisés dans les délais et le résultat est conforme à nos attentes.
            Nous recommandons cette entreprise.',
            'place' => 'Cognac',
            // 'image' => [
            //     [
            //         'picture' => 'https://image.lexica.art/full_jpg/90b9cf43-24ed-4124-a878-242f482b4beb',
            //     ],
            //     [
            //         'picture' => 'https://image.lexica.art/full_jpg/1cbd3396-6d9c-45ec-86cb-e0508eb42832',
            //     ],
            // ],
        ],
        [
            'name' => 'Terrasse Extérieure',
            'slug' => 'terrasse-exterieure',
            'description' => 'Ici, nous avons réalisé une terrasse en bois exotique.
            Nous avons utilisé du bois de teck pour sa résistance et sa durabilité.
            Nous avons également réalisé un escalier en bois exotique pour accéder à la terrasse.',
            'place' => 'Royan',
            // 'image' => [
            //     [
            //         'picture' => 'https://image.lexica.art/full_jpg/d4bab463-49ad-4a48-b8f4-e6d2f91ce858',
            //     ],
            //     [
            //         'picture' => 'https://image.lexica.art/full_jpg/56ab18c4-575f-49e5-9a7e-47210023751c',
            //     ],
            // ],
        ],
        [
            'name' => 'Rénovation de la cuisine',
            'slug' => 'renovation-de-la-cuisine',
            'description' => 'Nous avons fait appel à l\'entreprise Lexica pour la rénovation de notre cuisine.
            Nous avons été très satisfaits du travail réalisé.
            Les travaux ont été réalisés dans les délais et le résultat est conforme à nos attentes.
            Nous recommandons cette entreprise.',
            'place' => 'Saintes',
            // 'image' => [
            //     [
            //         'picture' => 'https://image.lexica.art/full_jpg/18e39584-1455-472c-a306-e48c7fd13ed6',
            //     ],
            //     [
            //         'picture' => 'https://image.lexica.art/full_jpg/e9724701-a672-46f6-9deb-8dfbf2affe07',
            //     ],
            // ],
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::PROJECTS as $value) {
            $project = new Project();
            $project->setName($value['name']);
            $project->setSlug($value['slug']);
            $project->setDescription($value['description']);
            $project->setPlace($value['place']);
            // foreach ($value['image'] as $image) {
            //     $projectImage = new ProjectImage();
            //     $projectImage->setPicture($image['picture']);
            //     $projectImage->setProject($project);
            //     $manager->persist($projectImage);
            // }
            $manager->persist($project);
        }

        $manager->flush();
    }
}
