<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfileRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource(
 * normalizationContext={"groups"={"profil"}},
 * collectionOperations={
 *    "get"={"path"="/admin/profils"},
 *    "POST"={"path"="/admin/profils"},
 * },
 * itemOperations={
 *     "put"={"path"="/admin/profil/{id}"},
 *     "delete"={"path"="/admin/profil/{id}"},
 *       "get_profil"=
 *      {
 *         "method"="GET",
 *         "path"="/admin/profil/{id}"
 *      }
 *     }
 *   
 * )
 *  
 * @ORM\Entity(repositoryClass=ProfileRepository::class)
 *@UniqueEntity(
 * fields={"libelle"},
 * message="Le libelle doit être unique"
 * )
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="le libelle ne doit pas être null")
     * @Groups({"profil"})
     * 
     */
    private $libelle;

    

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"profil"})
     */
    private $isdeleted;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="profil")
     * @ApiSubresource
     
     */
    private $profil;

    public function __construct()
    {
        $this->profil = new ArrayCollection();
    }

    

    

  
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

   
    public function getIsdeleted(): ?bool
    {
        return $this->isdeleted;
    }

    public function setIsdeleted(?bool $isdeleted): self
    {
        $this->isdeleted = $isdeleted;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getProfil(): Collection
    {
        return $this->profil;
    }

    public function addProfil(User $profil): self
    {
        if (!$this->profil->contains($profil)) {
            $this->profil[] = $profil;
            $profil->setProfil($this);
        }

        return $this;
    }

    public function removeProfil(User $profil): self
    {
        if ($this->profil->removeElement($profil)) {
            // set the owning side to null (unless already changed)
            if ($profil->getProfil() === $this) {
                $profil->setProfil(null);
            }
        }

        return $this;
    }

   

     
}
