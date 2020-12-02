<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReferentielRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ApiResource(
 *collectionOperations={
 *    "get"={"path"="/admin/Referentiels"},
 *     "add_referentiels"=
 *     {
 *         "method"="POST",
 *         "path"="/admin/Referentiels",
 *      }
 *     },
 * itemOperations={
 *    
 *     
 *       "get_referentiels"=
 *      {
 *         "method"="GET",
 *         "path"="/admin/referentiels/{id}"
 *      },
 *  "update_referentiel"=
 *      {
 *         "method"="PUT",
 *         "path"="/admin/referentiels/{id}"
 *      },
 *  "delete_referentiel"=
 *      {
 *         "method"="delete",
 *         "path"="/admin/referentiels/{id}"
 *      }
 *     }
 * )
 * @ApiFilter(SearchFilter::class, properties={"isdeleted": "exact"})
 * @ORM\Entity(repositoryClass=ReferentielRepository::class)
 */
class Referentiel
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
     * @ORM\Column(type="text")
     */
    private $Presentation;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $programme;

    /**
     * @ORM\ManyToMany(targetEntity=GrpCompetences::class, inversedBy="referentiels")
     */
    private $grpcompetence;

    /**
     * @ORM\ManyToMany(targetEntity=CritereAdmission::class, inversedBy="referentiels")
     */
    private $critereadmission;

    /**
     * @ORM\ManyToMany(targetEntity=CritereEvaluation::class, inversedBy="referentiels")
     */
    private $criterevaluation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isdeleted;

    /**
     * @ORM\ManyToMany(targetEntity=Promo::class, mappedBy="referentiel")
     */
    private $promos;

    

   

    public function __construct()
    {
        $this->grpcompetence = new ArrayCollection();
        $this->critereadmission = new ArrayCollection();
        $this->criterevaluation = new ArrayCollection();
        $this->promos = new ArrayCollection();
        $this->grpCompetences = new ArrayCollection();
       
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

    public function getPresentation(): ?string
    {
        return $this->Presentation;
    }

    public function setPresentation(string $Presentation): self
    {
        $this->Presentation = $Presentation;

        return $this;
    }

    public function getProgramme()
    {
        return $this->programme;
    }

    public function setProgramme($programme): self
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * @return Collection|GrpCompetences[]
     */
    public function getGrpcompetence(): Collection
    {
        return $this->grpcompetence;
    }

    public function addGrpcompetence(GrpCompetences $grpcompetence): self
    {
        if (!$this->grpcompetence->contains($grpcompetence)) {
            $this->grpcompetence[] = $grpcompetence;
        }

        return $this;
    }

    public function removeGrpcompetence(GrpCompetences $grpcompetence): self
    {
        $this->grpcompetence->removeElement($grpcompetence);

        return $this;
    }

    /**
     * @return Collection|CritereAdmission[]
     */
    public function getCritereadmission(): Collection
    {
        return $this->critereadmission;
    }

    public function addCritereadmission(CritereAdmission $critereadmission): self
    {
        if (!$this->critereadmission->contains($critereadmission)) {
            $this->critereadmission[] = $critereadmission;
        }

        return $this;
    }

    public function removeCritereadmission(CritereAdmission $critereadmission): self
    {
        $this->critereadmission->removeElement($critereadmission);

        return $this;
    }

    /**
     * @return Collection|CritereEvaluation[]
     */
    public function getCriterevaluation(): Collection
    {
        return $this->criterevaluation;
    }

    public function addCriterevaluation(CritereEvaluation $criterevaluation): self
    {
        if (!$this->criterevaluation->contains($criterevaluation)) {
            $this->criterevaluation[] = $criterevaluation;
        }

        return $this;
    }

    public function removeCriterevaluation(CritereEvaluation $criterevaluation): self
    {
        $this->criterevaluation->removeElement($criterevaluation);

        return $this;
    }

    public function getIsdeleted(): ?bool
    {
        return $this->isdeleted;
    }

    public function setIsdeleted(bool $isdeleted): self
    {
        $this->isdeleted = $isdeleted;

        return $this;
    }

    /**
     * @return Collection|Promo[]
     */
    public function getPromos(): Collection
    {
        return $this->promos;
    }

    public function addPromo(Promo $promo): self
    {
        if (!$this->promos->contains($promo)) {
            $this->promos[] = $promo;
            $promo->addReferentiel($this);
        }

        return $this;
    }

    public function removePromo(Promo $promo): self
    {
        if ($this->promos->removeElement($promo)) {
            $promo->removeReferentiel($this);
        }

        return $this;
    }

    
    

    
}
