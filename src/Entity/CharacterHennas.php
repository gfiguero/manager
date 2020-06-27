<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterHennas
 *
 * @ORM\Table(name="l2j_gs.character_hennas")
 * @ORM\Entity
 */
class CharacterHennas
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="slot", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $slot = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="class_index", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $classIndex = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="symbol_id", type="integer", nullable=true)
     */
    private $symbolId;

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function getClassIndex(): ?int
    {
        return $this->classIndex;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getSymbolId(): ?int
    {
        return $this->symbolId;
    }

    public function setSymbolId(?int $symbolId): self
    {
        $this->symbolId = $symbolId;

        return $this;
    }


}
