<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Ingredient;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
/**
 * @var Generator
 */

    private Generator $faker;                   //Faker creer des données test

    public function __construct()
    {   
        $this->faker = Factory::create('fr_FR');
    }


    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 50; $i++){               //Boucle qui permet de créer plusieurs ingrédiant
            $ingredient = new Ingredient();
            $ingredient->setName($this->faker->word())
                ->setPrice(mt_rand(0, 100));


            $manager->persist($ingredient);
        }



        $manager->flush();
    } 
} 

?>
