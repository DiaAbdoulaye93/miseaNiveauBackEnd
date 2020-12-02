<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Webmozart\Assert\Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * @ApiResource(
 * 
 *  collectionOperations={
 *    "get"={"path"="/admin/apprenant"},
 *     "add_apprenant"=
 *     {
 *         "method"="POST",
 *         "path"="/apprenants",
 *      },
 *  "Add_apprenant_by_admin"=
 *     {
 *         "method"="POST",
 *         "path"="/admin/apprenants",
 *      },
 * },
 * 
 * )
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 */
class Apprenant   extends User
{
    

   
   

    
    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $statut;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Archiver;

    /**
     * @ORM\ManyToOne(targetEntity=ProfilSortie::class, inversedBy="apprenants")
     */
    private $profil_sortie;

    /**
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="apprenant")
     */
    private $groupes;

    /**
     * @ORM\ManyToOne(targetEntity=Promo::class, inversedBy="apprenants")
     */
    private $promo;

    public function __construct()
    {
        $this->groupes = new ArrayCollection();
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

     

    

   

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getArchiver(): ?bool
    {
        return $this->Archiver;
    }

    public function setArchiver(?bool $Archiver): self
    {
        $this->Archiver = $Archiver;

        return $this;
    }

    public function getProfilSortie(): ?ProfilSortie
    {
        return $this->profil_sortie;
    }

    public function setProfilSortie(?ProfilSortie $profil_sortie): self
    {
        $this->profil_sortie = $profil_sortie;

        return $this;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->addApprenant($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeApprenant($this);
        }

        return $this;
    }

    public function getPromo(): ?Promo
    {
        return $this->promo;
    }

    public function setPromo(?Promo $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    }
