<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterOfflineTradeItems
 *
 * @ORM\Table(name="l2j_gs.character_offline_trade_items", indexes={@ORM\Index(name="charId", columns={"charId"}), @ORM\Index(name="item", columns={"item"})})
 * @ORM\Entity
 */
class CharacterOfflineTradeItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $charid;

    /**
     * @var int
     *
     * @ORM\Column(name="item", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $item = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $count = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $price = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function setCharid(int $charid): self
    {
        $this->charid = $charid;

        return $this;
    }

    public function getItem(): ?int
    {
        return $this->item;
    }

    public function setItem(int $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getCount(): ?string
    {
        return $this->count;
    }

    public function setCount(string $count): self
    {
        $this->count = $count;

        return $this;
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


}
