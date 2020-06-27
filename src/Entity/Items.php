<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="l2j_gs.items", indexes={@ORM\Index(name="owner_id", columns={"owner_id"}), @ORM\Index(name="time_of_use", columns={"time_of_use"}), @ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="loc", columns={"loc"})})
 * @ORM\Entity
 */
class Items
{
    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $objectId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=true)
     */
    private $ownerId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_id", type="integer", nullable=true)
     */
    private $itemId;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $count = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="enchant_level", type="integer", nullable=true)
     */
    private $enchantLevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc", type="string", length=10, nullable=true)
     */
    private $loc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="loc_data", type="integer", nullable=true)
     */
    private $locData;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_of_use", type="integer", nullable=true)
     */
    private $timeOfUse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="custom_type1", type="integer", nullable=true, options={"default"="0"})
     */
    private $customType1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="custom_type2", type="integer", nullable=true, options={"default"="0"})
     */
    private $customType2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mana_left", type="decimal", precision=5, scale=0, nullable=false, options={"default"="-1"})
     */
    private $manaLeft = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="decimal", precision=13, scale=0, nullable=false, options={"default"="0"})
     */
    private $time = '0';

    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    public function getOwnerId(): ?int
    {
        return $this->ownerId;
    }

    public function setOwnerId(?int $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;

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

    public function getEnchantLevel(): ?int
    {
        return $this->enchantLevel;
    }

    public function setEnchantLevel(?int $enchantLevel): self
    {
        $this->enchantLevel = $enchantLevel;

        return $this;
    }

    public function getLoc(): ?string
    {
        return $this->loc;
    }

    public function setLoc(?string $loc): self
    {
        $this->loc = $loc;

        return $this;
    }

    public function getLocData(): ?int
    {
        return $this->locData;
    }

    public function setLocData(?int $locData): self
    {
        $this->locData = $locData;

        return $this;
    }

    public function getTimeOfUse(): ?int
    {
        return $this->timeOfUse;
    }

    public function setTimeOfUse(?int $timeOfUse): self
    {
        $this->timeOfUse = $timeOfUse;

        return $this;
    }

    public function getCustomType1(): ?int
    {
        return $this->customType1;
    }

    public function setCustomType1(?int $customType1): self
    {
        $this->customType1 = $customType1;

        return $this;
    }

    public function getCustomType2(): ?int
    {
        return $this->customType2;
    }

    public function setCustomType2(?int $customType2): self
    {
        $this->customType2 = $customType2;

        return $this;
    }

    public function getManaLeft(): ?string
    {
        return $this->manaLeft;
    }

    public function setManaLeft(string $manaLeft): self
    {
        $this->manaLeft = $manaLeft;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }


}
