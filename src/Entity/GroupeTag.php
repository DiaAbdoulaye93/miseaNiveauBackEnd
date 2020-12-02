<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GroupeTagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *    normalizationContext={"groups"={"groupetag:read"}},
 *  collectionOperations={
 *    "get"={"path"="/admin/grptags"},
 *     "add_Grptag"=
 *     {
 *         "method"="POST",
 *         "path"="/admin/grptags",
 *      }
 *     },
 *  itemOperations={
 *    
 *     
 *       "get_Grptag"=
 *      {
 *         "method"="GET",
 *         "path"="/admin/grptags/{id}"
 *      },
 *  "update_Grptag"=
 *      {
 *         "method"="PUT",
 *         "path"="/admin/grptags/{id}"
 *      },
 *  "delete_Grptag"=
 *      {
 *         "method"="delete",
 *         "path"="/admin/prmos/{id}"
 *      }
 *     }
 * )
 * @ORM\Entity(repositoryClass=GroupeTagRepository::class)
 */
class GroupeTag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"groupetag:read"})
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, mappedBy="groupetag")
     * @Groups({"groupetag:read"})
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
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
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addGroupetag($this);
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->removeElement($tag)) {
            $tag->removeGroupetag($this);
        }

        return $this;
    }
}
