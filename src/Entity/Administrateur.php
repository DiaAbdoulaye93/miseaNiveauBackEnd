<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AdministrateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 * collectionOperations={
 *    "get"={"path"="/admin/adm"},
 *     "POST"={"path"="/admin/adm/add"},
 * },
 * 
 * )
 * @ORM\Entity(repositoryClass=AdministrateurRepository::class)
 */
class Administrateur  extends User
{
    

    /**
     * @ORM\Column(type="integer")
     */
    private $salaire;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

     
}
