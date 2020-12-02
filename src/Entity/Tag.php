<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 * collectionOperations={
 *    "get"={"path"="/admin/tags"},
 *     "add_tag"=
 *     {
 *         "method"="POST",
 *         "path"="/admin/tags",
 *      }
 *     },
 *  itemOperations={
 *    
 *     
 *       "get_tag"=
 *      {
 *         "method"="GET",
 *         "path"="/admin/tags/{id}"
 *      },
 *  "update_tag"=
 *      {
 *         "method"="PUT",
 *         "path"="/admin/tags/{id}"
 *      },
 *  "delete_tag"=
 *      {
 *         "method"="delete",
 *         "path"="/admin/prmos/{id}"
 *      }
 *     }
 * )
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"groupetag:read"})
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeTag::class, inversedBy="tags")
     */
    private $groupetag;

    public function __construct()
    {
        $this->groupetag = new ArrayCollection();
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

    /**
     * @return Collection|GroupeTag[]
     */
    public function getGroupetag(): Collection
    {
        return $this->groupetag;
    }

    public function addGroupetag(GroupeTag $groupetag): self
    {
        if (!$this->groupetag->contains($groupetag)) {
            $this->groupetag[] = $groupetag;
        }

        return $this;
    }

    public function removeGroupetag(GroupeTag $groupetag): self
    {
        $this->groupetag->removeElement($groupetag);

        return $this;
    }
}
