<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterQuestGlobalData
 *
 * @ORM\Table(name="l2j_gs.character_quest_global_data")
 * @ORM\Entity
 */
class CharacterQuestGlobalData
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
     * @ORM\Column(name="var", type="string", length=20, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $var = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    public function getVar(): ?string
    {
        return $this->var;
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
