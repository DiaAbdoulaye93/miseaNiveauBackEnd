<?php
namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\Formateur;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class FormateurFixtures extends Fixture implements DependentFixtureInterface
{
    private $encoder;
  
   public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
       
        $faker = Factory::create('fr_FR');
        $formateur=new Formateur();
        $password="Formateur";
        
        $profil=$this->getReference('Formateur');
        $formateur->setPrenom($faker->firstName);
        $formateur->setNom($faker->lastName);
        $formateur->setEmail($faker->email);
        $formateur->setRoles(["ROLE_".$password]);
        $formateur->setSalaire(15000);
        $formateur->setAdresse($faker->address);
        $formateur->setTelephone("771349777");
        $formateur->setSex("h");
        $password=$this->encoder->encodePassword($formateur,$password);
        $formateur->setPassword($password);
        $formateur->setProfil($profil);
        $manager->persist($formateur); 
        $manager->flush();

      
}
public function getDependencies()
{
    return array(
        ProfileFixtures::class,
    );
}
}
?>