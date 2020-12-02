<?php
namespace App\DataPersister;

use App\Entity\Referentiel;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;


class ReferentielPersister implements DataPersisterInterface
{
    private $manager;
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager= $manager; 
    }
    public function supports($data): bool
    {
        return $data instanceof Referentiel;
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
       $this->manager->flush();
    }
}