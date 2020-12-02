<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompetencesRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *  
 *   collectionOperations=
 *   {
 *    "get"={"path"="/admin/competences"},
 *     "add_competence"=
 *     {
 *        "method"="POST",
 *        "path"="/admin/competences"
 *     }
 *    
 *   },
 *   itemOperations={
 *    "get"={"path"="/admin/competences/{id}"},
 *    "put"={"path"="/admin/competences/{id}"},
 *    
 * })
 * @ORM\Entity(repositoryClass=CompetencesRepository::class)
 */
class Competences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"grpcompetence:read"})
     *  
     */
    private $libelle;

   

    /**
     * @ORM\ManyToOne(targetEntity=NiveauxEvaluation::class, inversedBy="competences")
     */
    private $niveaucompetence;

    /**
     * @ORM\ManyToMany(targetEntity=GrpCompetences::class, inversedBy="competences" ,cascade={"persist"})
     * 
     */
    private $grpcompetence;

    public function __construct()
    {
        $this->grpcompetence = new ArrayCollection();
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

    

    public function getNiveaucompetence(): ?NiveauxEvaluation
    {
        return $this->niveaucompetence;
    }

    public function setNiveaucompetence(?NiveauxEvaluation $niveaucompetence): self
    {
        $this->niveaucompetence = $niveaucompetence;

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
}
