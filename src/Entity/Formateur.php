<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FormateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
  * collectionOperations={
 *     
 *  
 * },
 * )
 * @ORM\Entity(repositoryClass=FormateurRepository::class)
 */
class Formateur   extends User
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
