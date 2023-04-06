<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for($i=0; $i<10; $i++) {
            $projet = new Project();
            $projet ->setTitle('Les projets de prepavenir numero '.$i)
                   ->setDescription('lorem ipsum'.$i)
                   ->setImage('ipsum lorem'.$i);
                   
                   
    
                //Ajouter l'info à la base de données
            $manager->persist($projet);
            
           
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
