<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillsRepository")
 */
class Skills
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Experiences", mappedBy="skills")
     */
    private $id_experience;

    public function __construct()
    {
        $this->id_experience = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

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
     * @return Collection|Experiences[]
     */
    public function getIdExperience(): Collection
    {
        return $this->id_experience;
    }

    public function addIdExperience(Experiences $idExperience): self
    {
        if (!$this->id_experience->contains($idExperience)) {
            $this->id_experience[] = $idExperience;
            $idExperience->setSkills($this);
        }

        return $this;
    }

    public function removeIdExperience(Experiences $idExperience): self
    {
        if ($this->id_experience->contains($idExperience)) {
            $this->id_experience->removeElement($idExperience);
            // set the owning side to null (unless already changed)
            if ($idExperience->getSkills() === $this) {
                $idExperience->setSkills(null);
            }
        }

        return $this;
    }
}
