<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterRecipeshoplist
 *
 * @ORM\Table(name="l2j_gs.character_recipeshoplist")
 * @ORM\Entity
 */
class CharacterRecipeshoplist
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
     * @ORM\Column(name="recipeId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $recipeid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $price = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="index", type="boolean", length=3, nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $index = '0';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getRecipeid(): ?int
    {
        return $this->recipeid;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getIndex(): ?bool
    {
        return $this->index;
    }

    public function setIndex(bool $index): self
    {
        $this->index = $index;

        return $this;
    }


}
