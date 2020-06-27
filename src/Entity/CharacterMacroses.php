<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterMacroses
 *
 * @ORM\Table(name="l2j_gs.character_macroses")
 * @ORM\Entity
 */
class CharacterMacroses
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true,"default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $id = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descr", type="string", length=80, nullable=true)
     */
    private $descr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acronym", type="string", length=4, nullable=true)
     */
    private $acronym;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commands", type="string", length=500, nullable=true)
     */
    private $commands;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function setDescr(?string $descr): self
    {
        $this->descr = $descr;

        return $this;
    }

    public function getAcronym(): ?string
    {
        return $this->acronym;
    }

    public function setAcronym(?string $acronym): self
    {
        $this->acronym = $acronym;

        return $this;
    }

    public function getCommands(): ?string
    {
        return $this->commands;
    }

    public function setCommands(?string $commands): self
    {
        $this->commands = $commands;

        return $this;
    }


}
