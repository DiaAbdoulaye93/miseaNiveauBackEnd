<?php
namespace App\DataPersister;

use App\Entity\Profile;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;

class ProfilePersister implements DataPersisterInterface
{
    private $manager;
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager= $manager; 
    }
    public function supports($data): bool
    {
        return $data instanceof Profile;
    }
    public function persist($data)
    {
       // $this->manager->persist($data);
        $this->manager->flush();
      return $data;
    }
    public function remove($data)
    {
       $data->setIsdeleted(true);
       foreach($data->getProfil() as $users)
       {
           $users->setIsdeleted(true);
       }
       
       $this->manager->flush();
    }
}