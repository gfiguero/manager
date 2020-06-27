<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterQuests
 *
 * @ORM\Table(name="l2j_gs.character_quests")
 * @ORM\Entity
 */
class CharacterQuests
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=20, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $var = '';

    /**
     * @var int
     *
     * @ORM\Column(name="class_index", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $classIndex = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getVar(): ?string
    {
        return $this->var;
    }

    public function getClassIndex(): ?int
    {
        return $this->classIndex;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
