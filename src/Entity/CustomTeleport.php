<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomTeleport
 *
 * @ORM\Table(name="l2j_gs.custom_teleport")
 * @ORM\Entity
 */
class CustomTeleport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="0","unsigned"=true})
     * @ORM\Id
     */
    private $id = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=75, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="loc_x", type="integer", nullable=true)
     */
    private $locX;

    /**
     * @var int|null
     *
     * @ORM\Column(name="loc_y", type="integer", nullable=true)
     */
    private $locY;

    /**
     * @var int|null
     *
     * @ORM\Column(name="loc_z", type="integer", nullable=true)
     */
    private $locZ;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="fornoble", type="boolean", nullable=false, options={"default"="0"})
     */
    private $fornoble = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="itemId", type="smallint", nullable=false, options={"default"="57","unsigned"=true})
     */
    private $itemid = '57';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLocX(): ?int
    {
        return $this->locX;
    }

    public function setLocX(?int $locX): self
    {
        $this->locX = $locX;

        return $this;
    }

    public function getLocY(): ?int
    {
        return $this->locY;
    }

    public function setLocY(?int $locY): self
    {
        $this->locY = $locY;

        return $this;
    }

    public function getLocZ(): ?int
    {
        return $this->locZ;
    }

    public function setLocZ(?int $locZ): self
    {
        $this->locZ = $locZ;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getFornoble(): ?bool
    {
        return $this->fornoble;
    }

    public function setFornoble(bool $fornoble): self
    {
        $this->fornoble = $fornoble;

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


}
