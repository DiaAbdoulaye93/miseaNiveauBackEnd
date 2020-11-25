<?php
namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\Administrateur;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class AdministrateurFixtures extends Fixture implements DependentFixtureInterface
{
    private $encoder;
  
   public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
       
        $faker = Factory::create('fr_FR');
        $admin=new Administrateur();
        $password="ADMIN";
        
       
      //  $admin->setTelephone($faker->unique()->randomElement(['77347343', '769834924','788439440', '70823920']));
        $profil=$this->getReference('Administrateur');
        $admin->setPrenom($faker->firstName);
        $admin->setNom($faker->lastName);
        $admin->setEmail($faker->email);
        $admin->setRoles(["ROLE_".$password]);
        $admin->setSalaire(15000);
        $admin->setSex("h");
        $admin->setAdresse($faker->address);
        $admin->setTelephone("703270777");
        $password=$this->encoder->encodePassword($admin,$password);
        $admin->setPassword($password);
        $admin->setProfil($profil);
        $manager->persist($admin); 
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