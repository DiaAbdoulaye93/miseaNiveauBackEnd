<?php
namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\Cm;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class CmFixtures extends Fixture implements DependentFixtureInterface
{
    private $encoder;
  
   public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
       
        $faker = Factory::create('fr_FR');
        $cm=new Cm();
        $password="Cm";
        
       
      //  $admin->setTelephone($faker->unique()->randomElement(['77347343', '769834924','788439440', '70823920']));
        $profil=$this->getReference('CM');
        $cm->setPrenom($faker->firstName);
        $cm->setNom($faker->lastName);
        $cm->setTelephone("773970377");
        $cm->setAdresse($faker->address);
        $cm->setEmail($faker->email);
        $cm->setRoles(["ROLE_".$password]);
        $cm->setSalaire(15000);
        $cm->setSex("h");
        $password=$this->encoder->encodePassword($cm,$password);
        $cm->setPassword($password);
        $cm->setProfil($profil);
        $manager->persist($cm); 
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