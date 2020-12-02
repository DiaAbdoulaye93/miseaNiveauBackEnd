<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivrablesRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ApiResource(
 * collectionOperations={
 *    "get"={"path"="/formateur/livrables"},
 *     "add_livrable"=
 *     {
 *         "method"="POST",
 *         "path"="/formateur/livrables",
 *      }
 *     },
 *    itemOperations={
 *    
 *     
 *       "get_livrables"=
 *      {
 *         "method"="GET",
 *         "path"="/formateur/lirvables/{id}"
 *      },
 *  "update_livrables"=
 *      {
 *         "method"="PUT",
 *         "path"="/formateur/lirvables/{id}"
 *      },
 *  "delete_livrables"=
 *      {
 *         "method"="delete",
 *         "path"="/formateur/prmo/{id}"
 *      }
 *     }
 * 
 * )
 * @ORM\Entity(repositoryClass=LivrablesRepository::class)
 */
class Livrables
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="date")
     */
    private $datelivraison;

    /**
     * @ORM\ManyToMany(targetEntity=LivrablePartielle::class, inversedBy="livrables")
     */
    private $livrablepartielle;

    public function __construct()
    {
        $this->livrablepartielle = new ArrayCollection();
        $this->createdAt=new DateTime();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDatelivraison(): ?\DateTimeInterface
    {
        return $this->datelivraison;
    }

    public function setDatelivraison(\DateTimeInterface $datelivraison): self
    {
        $this->datelivraison = $datelivraison;

        return $this;
    }

    /**
     * @return Collection|LivrablePartielle[]
     */
    public function getLivrablepartielle(): Collection
    {
        return $this->livrablepartielle;
    }

    public function addLivrablepartielle(LivrablePartielle $livrablepartielle): self
    {
        if (!$this->livrablepartielle->contains($livrablepartielle)) {
            $this->livrablepartielle[] = $livrablepartielle;
        }

        return $this;
    }

    public function removeLivrablepartielle(LivrablePartielle $livrablepartielle): self
    {
        $this->livrablepartielle->removeElement($livrablepartielle);

        return $this;
    }
}
