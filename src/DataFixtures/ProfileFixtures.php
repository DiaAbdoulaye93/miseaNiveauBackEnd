<?php

namespace App\DataFixtures;

use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Profile;
class ProfileFixtures extends Fixture
{
    
   
    public function load(ObjectManager $manager)
    {
        $UsersProfiles=['Administrateur', 'Formateur', 'CM','Apprenant'];
      
     $faker = Factory::create('fr_FR');
    
        foreach ($UsersProfiles as $profile) {
            $profil = new Profile();
            $profil->setLibelle($profile);
            $profil->setIsdeleted(false);
            $manager->persist($profil);
          //  $manager->flush();
          $this->setReference($profile,$profil);          
    }
  $manager->flush();
}
}