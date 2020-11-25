<?php

namespace App\Entity;

use App\Entity\Profile;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\Unique;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
* @ORM\Entity(repositoryClass=UserRepository::class)
* @UniqueEntity(fields={"email"},message="l'email doit être unique")
* @ORM\InheritanceType("JOINED")
* @ORM\DiscriminatorColumn(name="type", type="string")
* @ORM\DiscriminatorMap({"user" = "User", "administrateur" = "Administrateur", "cm" = "Cm", "formateur" = "Formateur", "apprenant" = "Apprenant"})
* @ApiResource(

 * collectionOperations={
 *    "get"={"path"="/admin/users"},
 *   "add_users"=
 *     {
 *         "method"="POST",
 *         "path"="/admin/users",
 *      },
 *    
 *  },
 *)
*/
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Email(message="l'email  n'est pas  valide")
     */
    protected $email;

    /**
     * @ORM\Column(type="json")
     */
    protected $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     
     * @ORM\Column(type="string", length=50)
     */
    protected $prenom;

    /**
     * @Assert\NotBlank(
     *     message="le nom est obligatoire"
     * )
     * @ORM\Column(type="string", length=50)
     */
    protected $nom;

    

    /**
     * @ORM\ManyToOne(targetEntity=Profile::class, inversedBy="profil")
     
     */
    protected $profil;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $Sex;

    /**
     
     * @ORM\Column(type="string", nullable=true)
    * @Assert\Unique(
    * message="le Numero de telephone doit etre unique"
    *)
     */
    protected $telephone;

    /**@Assert\Unique
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     */
    protected $adresse;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    protected $photo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isdeleted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    
    public function getProfil(): ?Profile
    {
        return $this->profil;
    }

    public function setProfil(?Profile $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->Sex;
    }

    public function setSex(?string $Sex): self
    {
        $this->Sex = $Sex;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

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
}
