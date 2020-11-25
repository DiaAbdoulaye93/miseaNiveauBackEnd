<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CmRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(   
 *  collectionOperations={
 *    "get"={"path"="/admin/cm"},
 *     "POST"={"path"="/admin/cm/add"}
 * },
 * )
 * @ORM\Entity(repositoryClass=CmRepository::class)
 */
class Cm  extends User
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
