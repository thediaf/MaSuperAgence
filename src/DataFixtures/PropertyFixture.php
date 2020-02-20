<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class PropertyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');
        for ($i=0; $i < 100; $i++) 
        { 
            $property = new Property();
            $property->setTitle($faker->words(3, true))
                    ->setDescription($faker->sentences(3, true))
                    ->setSurface($faker->numberBetween(40, 300))
                    ->setRooms($faker->numberBetween(2, 9))
                    ->setBedrooms($faker->numberBetween(1, 7))
                    ->setFloor($faker->numberBetween(0,15))
                    ->setPrice($faker->numberBetween(100000,1000000))
                    ->setHeat($faker->numberBetween(0,count(Property::HEAT) - 1))            
                    ->setAddress($faker->address)
                    ->setCity($faker->city)
                    ->setPostalCode($faker->postcode)
                    ->setSold(false);
            
            $manager->persist($property);
        }
        $manager->flush();
    }
}
 