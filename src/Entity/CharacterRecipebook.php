<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterRecipebook
 *
 * @ORM\Table(name="l2j_gs.character_recipebook")
 * @ORM\Entity
 */
class CharacterRecipebook
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="decimal", precision=11, scale=0, nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="classIndex", type="boolean", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $classindex = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"default"="0"})
     */
    private $type = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getClassindex(): ?bool
    {
        return $this->classindex;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }


}
