<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itemsonground
 *
 * @ORM\Table(name="l2j_gs.itemsonground")
 * @ORM\Entity
 */
class Itemsonground
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
     * @var int|null
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;

    /**
     * @var int|null
     *
     * @ORM\Column(name="z", type="integer", nullable=true)
     */
    private $z;

    /**
     * @var int
     *
     * @ORM\Column(name="drop_time", type="bigint", nullable=false, options={"default"="0"})
     */
    private $dropTime = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="equipable", type="integer", nullable=true, options={"default"="0"})
     */
    private $equipable = '0';

    public function getObjectId(): ?int
    {
        return $this->objectId;
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

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(?int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(?int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): ?int
    {
        return $this->z;
    }

    public function setZ(?int $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getDropTime(): ?string
    {
        return $this->dropTime;
    }

    public function setDropTime(string $dropTime): self
    {
        $this->dropTime = $dropTime;

        return $this;
    }

    public function getEquipable(): ?int
    {
        return $this->equipable;
    }

    public function setEquipable(?int $equipable): self
    {
        $this->equipable = $equipable;

        return $this;
    }


}
