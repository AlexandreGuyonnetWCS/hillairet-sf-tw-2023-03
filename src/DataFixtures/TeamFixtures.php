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
            'summary' => 'John est notre menuisiser en chef,
            il est très doué et très sérieux',
        ],
        [
            'firstName' => 'Coralie',
            'summary' => 'Depuis 15 ans Jane, notre secrétaire tout terrain,
            est la première personne que vous verrez en arrivant chez nous',
        ],
        [
            'firstName' => 'Jean-Robert',
            'summary' => 'Jean-Robert, cuisiniste de formation,
            est notre chef aménageur. Il fera de votre cuisine un véritable chef d\'oeuvre',
        ],
        [
            'firstName' => 'Igor',
            'summary' => 'Charpentier depuis 25 ans Igor est notre chef de chantier.
            Il est très rigoureux et très organisé',
        ],
        [
            'firstName' => 'Jeanne',
            'summary' => 'Experte en pose de parquet, Jeanne est notre sollière.
            Elle est très rigoureuse et très organisée',
        ],
        [
            'firstName' => 'Hugo',
            'summary' => 'Hugo expert de l\'ordinateur, modéliseur 3D,
            est notre chef de projet. Il est très rigoureux et très organisé',
        ],
        [
            'firstName' => 'Bigoudi',
            'summary' => 'Bigoudi est notre mascotte.
            Il est très rigoureux et très organisé',
        ],
        [
            'firstName' => 'Shen-zu',
            'summary' => 'Shen-zu est notre cheffe,
            elle est à l\'écoute de tout vos projets',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::TEAMS as $value) {
            $team = new Team();
            $team->setFirstName($value['firstName']);
            // add random image of people
            $team->setPicture('https://picsum.photos/200/300');
            $team->setSummary($value['summary']);
            $manager->persist($team);
        }

        $manager->flush();
    }
}
