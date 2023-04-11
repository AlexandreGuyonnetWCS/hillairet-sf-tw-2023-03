<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TeamFixtures extends Fixture
{
    public const TEAMS = [
        [
            'firstName' => 'Michel',
            // 'picture' => 'https://image.lexica.art/full_jpg/f66ae2f5-b82d-4a00-b966-c0f91b88dce8',
            'summary' => 'John est notre menuisiser en chef,
            il est très doué et très sérieux',
        ],
        [
            'firstName' => 'Coralie',
            // 'picture' => 'https://image.lexica.art/full_jpg/942f5e3c-6638-4c56-81a2-76aa46025b96',
            'summary' => 'Depuis 15 ans Jane, notre secrétaire tout terrain,
            est la première personne que vous verrez en arrivant chez nous',
        ],
        [
            'firstName' => 'Jean-Robert',
            // 'picture' => 'https://image.lexica.art/full_jpg/e74f43f9-8bca-4f3a-888d-04e859b5a1bb',
            'summary' => 'Jean-Robert, cuisiniste de formation,
            est notre chef aménageur. Il fera de votre cuisine un véritable chef d\'oeuvre',
        ],
        [
            'firstName' => 'Igor',
            // 'picture' => 'https://image.lexica.art/full_jpg/921608fa-32ab-42c3-bb8c-0144cabc4210',
            'summary' => 'Charpentier depuis 25 ans Igor est notre chef de chantier.
            Il est très rigoureux et très organisé',
        ],
        [
            'firstName' => 'Jeanne',
            // 'picture' => 'https://image.lexica.art/full_jpg/b4f2e4ca-e515-4c75-b40a-63a04bfbdb01',
            'summary' => 'Experte en pose de parquet, Jeanne est notre sollière.
            Elle est très rigoureuse et très organisée',
        ],
        [
            'firstName' => 'Hugo',
            // 'picture' => 'https://image.lexica.art/full_jpg/0a9ffe59-8a7c-4d62-841d-794e56f48f9f',
            'summary' => 'Hugo expert de l\'ordinateur, modéliseur 3D,
            est notre chef de projet. Il est très rigoureux et très organisé',
        ],
        [
            'firstName' => 'Bigoudi',
            // 'picture' => 'https://image.lexica.art/full_jpg/fd122790-d52b-4178-922c-3817f49d71cb',
            'summary' => 'Bigoudi est notre mascotte.
            Il est très rigoureux et très organisé',
        ],
        [
            'firstName' => 'Shen-zu',
            // 'picture' => 'https://image.lexica.art/full_jpg/08940c0f-d443-471e-bd24-6dd7f582faaf',
            'summary' => 'Shen-zu est notre cheffe, 
            elle est à l\'écoute de tout vos projets',
        ],
        [
            'firstName' => 'Alberto',
            // 'picture' => 'https://image.lexica.art/full_jpg/5a877731-ff64-4a5b-886f-06a5436c6358',
            'summary' => 'Alberto est notre chef de projet. 
            Il est très rigoureux et très organisé',
        ],
        [
            'firstName' => 'Candice',
            // 'picture' => 'https://image.lexica.art/full_jpg/65114d12-84ed-4917-ac4f-661f5736dfc2',
            'summary' => 'Candice est notre communicante.
            Elle est très rigoureuse et très organisée',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::TEAMS as $value) {
            $team = new Team();
            $team->setFirstName($value['firstName']);
            // $team->setPicture($value['picture']);
            $team->setSummary($value['summary']);
            $manager->persist($team);
        }

        $manager->flush();
    }
}
