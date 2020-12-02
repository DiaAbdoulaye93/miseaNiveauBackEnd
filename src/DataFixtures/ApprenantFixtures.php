<?php
namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\Apprenant;
use App\DataFixtures\ProfileFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ApprenantFixtures extends Fixture implements DependentFixtureInterface
{
    
  private $encoder;

  public function __construct(UserPasswordEncoderInterface $encoder)
   {
       $this->encoder = $encoder;
   }

    public function load(ObjectManager $manager)
    {
       
        $faker = Factory::create('fr_FR');
        $password="Apprenant";

        $apprenant=new Apprenant();
      //  $apprenant->setTelephone($faker->unique()->randomElement(['77347343', '769834924','788439440', '70823920']));
      $profil=$this->getReference('Apprenant');
        $apprenant->setPrenom($faker->firstName);
        $apprenant->setNom($faker->lastName);
        $apprenant->setEmail($faker->email);
        $apprenant->setAdresse($faker->address);
        $apprenant->setSex("h");
        $apprenant->setPromo("3");
        $apprenant->setRoles(["ROLE_".$password]);
        $password=$this->encoder->encodePassword($apprenant,$password);
        $apprenant->setPassword($password);
        $apprenant->setTelephone("771970777");
        $apprenant->setArchiver(0);
        $apprenant->setProfil($profil);
        $manager->persist($apprenant); 
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