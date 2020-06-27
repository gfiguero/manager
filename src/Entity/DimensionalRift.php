<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DimensionalRift
 *
 * @ORM\Table(name="l2j_gs.dimensional_rift")
 * @ORM\Entity
 */
class DimensionalRift
{
    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="room_id", type="boolean", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $roomId;

    /**
     * @var int
     *
     * @ORM\Column(name="xMin", type="integer", nullable=false)
     */
    private $xmin;

    /**
     * @var int
     *
     * @ORM\Column(name="xMax", type="integer", nullable=false)
     */
    private $xmax;

    /**
     * @var int
     *
     * @ORM\Column(name="yMin", type="integer", nullable=false)
     */
    private $ymin;

    /**
     * @var int
     *
     * @ORM\Column(name="yMax", type="integer", nullable=false)
     */
    private $ymax;

    /**
     * @var int
     *
     * @ORM\Column(name="zMin", type="integer", nullable=false)
     */
    private $zmin;

    /**
     * @var int
     *
     * @ORM\Column(name="zMax", type="integer", nullable=false)
     */
    private $zmax;

    /**
     * @var int
     *
     * @ORM\Column(name="xT", type="integer", nullable=false)
     */
    private $xt;

    /**
     * @var int
     *
     * @ORM\Column(name="yT", type="integer", nullable=false)
     */
    private $yt;

    /**
     * @var int
     *
     * @ORM\Column(name="zT", type="integer", nullable=false)
     */
    private $zt;

    /**
     * @var bool
     *
     * @ORM\Column(name="boss", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $boss = '0';

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function getRoomId(): ?bool
    {
        return $this->roomId;
    }

    public function getXmin(): ?int
    {
        return $this->xmin;
    }

    public function setXmin(int $xmin): self
    {
        $this->xmin = $xmin;

        return $this;
    }

    public function getXmax(): ?int
    {
        return $this->xmax;
    }

    public function setXmax(int $xmax): self
    {
        $this->xmax = $xmax;

        return $this;
    }

    public function getYmin(): ?int
    {
        return $this->ymin;
    }

    public function setYmin(int $ymin): self
    {
        $this->ymin = $ymin;

        return $this;
    }

    public function getYmax(): ?int
    {
        return $this->ymax;
    }

    public function setYmax(int $ymax): self
    {
        $this->ymax = $ymax;

        return $this;
    }

    public function getZmin(): ?int
    {
        return $this->zmin;
    }

    public function setZmin(int $zmin): self
    {
        $this->zmin = $zmin;

        return $this;
    }

    public function getZmax(): ?int
    {
        return $this->zmax;
    }

    public function setZmax(int $zmax): self
    {
        $this->zmax = $zmax;

        return $this;
    }

    public function getXt(): ?int
    {
        return $this->xt;
    }

    public function setXt(int $xt): self
    {
        $this->xt = $xt;

        return $this;
    }

    public function getYt(): ?int
    {
        return $this->yt;
    }

    public function setYt(int $yt): self
    {
        $this->yt = $yt;

        return $this;
    }

    public function getZt(): ?int
    {
        return $this->zt;
    }

    public function setZt(int $zt): self
    {
        $this->zt = $zt;

        return $this;
    }

    public function getBoss(): ?bool
    {
        return $this->boss;
    }

    public function setBoss(bool $boss): self
    {
        $this->boss = $boss;

        return $this;
    }


}
