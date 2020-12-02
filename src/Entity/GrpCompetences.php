<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GrpCompetencesRepository;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**    
 * @ApiResource(
 * 
 *  normalizationContext={"groups"={"grpcompetence:read"}},
 *  collectionOperations={
 * 
 *    "get"={"path"="/admin/grpecompetences"},
 *  "groupecompetences"=
 *     {
 *         "method"="POST",
 *         "path"="/admin/grpecompetences",
 *      },
 *    
 * },
 *  itemOperations={
 *    "get"={"path"="/admin/grpecompetences/{id}"},
 *    
 * }
 * )
 * @ORM\Entity(repositoryClass=GrpCompetencesRepository::class)
 */
class GrpCompetences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer") 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"grpcompetence:read"})
     *  
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     * @Groups({"grpcompetence:read"})
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Competences::class, mappedBy="grpcompetence", cascade={"persist"})
     *  @Groups({"grpcompetence:read"})
     */
    private $competences;

    /**
     * @ORM\ManyToMany(targetEntity=Referentiel::class, mappedBy="grpcompetence")
     */
    private $referentiels;

     

    


    
    public function __construct()
    {
        $this->competences = new ArrayCollection();
        $this->referentiels = new ArrayCollection();
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

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Competences[]
     */
    public function getCompetences(): Collection
    {
        return $this->competences;
    }

    public function addCompetence(Competences $competence): self
    {
        if (!$this->competences->contains($competence)) {
            $this->competences[] = $competence;
            $competence->addGrpcompetence($this);
        }

        return $this;
    }

    public function removeCompetence(Competences $competence): self
    {
        if ($this->competences->removeElement($competence)) {
            $competence->removeGrpcompetence($this);
        }

        return $this;
    }

    /**
     * @return Collection|Referentiel[]
     */
    public function getReferentiels(): Collection
    {
        return $this->referentiels;
    }

    public function addReferentiel(Referentiel $referentiel): self
    {
        if (!$this->referentiels->contains($referentiel)) {
            $this->referentiels[] = $referentiel;
            $referentiel->addGrpcompetence($this);
        }

        return $this;
    }

    public function removeReferentiel(Referentiel $referentiel): self
    {
        if ($this->referentiels->removeElement($referentiel)) {
            $referentiel->removeGrpcompetence($this);
        }

        return $this;
    }

    public function getReferentiel(): ?Referentiel
    {
        return $this->referentiel;
    }

    public function setReferentiel(?Referentiel $referentiel): self
    {
        $this->referentiel = $referentiel;

        return $this;
    }

    

   
}
