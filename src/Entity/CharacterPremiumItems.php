<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterPremiumItems
 *
 * @ORM\Table(name="l2j_gs.character_premium_items", indexes={@ORM\Index(name="charId", columns={"charId"}), @ORM\Index(name="itemNum", columns={"itemNum"}), @ORM\Index(name="itemId", columns={"itemId"})})
 * @ORM\Entity
 */
class CharacterPremiumItems
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
     * @ORM\Column(name="charId", type="integer", nullable=false)
     */
    private $charid;

    /**
     * @var int
     *
     * @ORM\Column(name="itemNum", type="integer", nullable=false)
     */
    private $itemnum;

    /**
     * @var int
     *
     * @ORM\Column(name="itemId", type="integer", nullable=false)
     */
    private $itemid;

    /**
     * @var int
     *
     * @ORM\Column(name="itemCount", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $itemcount;

    /**
     * @var string
     *
     * @ORM\Column(name="itemSender", type="string", length=50, nullable=false)
     */
    private $itemsender;

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

    public function getItemnum(): ?int
    {
        return $this->itemnum;
    }

    public function setItemnum(int $itemnum): self
    {
        $this->itemnum = $itemnum;

        return $this;
    }

    public function getItemid(): ?int
    {
        return $this->itemid;
    }

    public function setItemid(int $itemid): self
    {
        $this->itemid = $itemid;

        return $this;
    }

    public function getItemcount(): ?string
    {
        return $this->itemcount;
    }

    public function setItemcount(string $itemcount): self
    {
        $this->itemcount = $itemcount;

        return $this;
    }

    public function getItemsender(): ?string
    {
        return $this->itemsender;
    }

    public function setItemsender(string $itemsender): self
    {
        $this->itemsender = $itemsender;

        return $this;
    }


}
