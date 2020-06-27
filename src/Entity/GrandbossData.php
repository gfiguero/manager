<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrandbossData
 *
 * @ORM\Table(name="l2j_gs.grandboss_data")
 * @ORM\Entity
 */
class GrandbossData
{
    /**
     * @var int
     *
     * @ORM\Column(name="boss_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $bossId;

    /**
     * @var int
     *
     * @ORM\Column(name="loc_x", type="integer", nullable=false)
     */
    private $locX;

    /**
     * @var int
     *
     * @ORM\Column(name="loc_y", type="integer", nullable=false)
     */
    private $locY;

    /**
     * @var int
     *
     * @ORM\Column(name="loc_z", type="integer", nullable=false)
     */
    private $locZ;

    /**
     * @var int
     *
     * @ORM\Column(name="heading", type="integer", nullable=false, options={"default"="0"})
     */
    private $heading = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="respawn_time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $respawnTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="currentHP", type="decimal", precision=30, scale=15, nullable=false)
     */
    private $currenthp;

    /**
     * @var string
     *
     * @ORM\Column(name="currentMP", type="decimal", precision=30, scale=15, nullable=false)
     */
    private $currentmp;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $status = '0';

    public function getBossId(): ?int
    {
        return $this->bossId;
    }

    public function getLocX(): ?int
    {
        return $this->locX;
    }

    public function setLocX(int $locX): self
    {
        $this->locX = $locX;

        return $this;
    }

    public function getLocY(): ?int
    {
        return $this->locY;
    }

    public function setLocY(int $locY): self
    {
        $this->locY = $locY;

        return $this;
    }

    public function getLocZ(): ?int
    {
        return $this->locZ;
    }

    public function setLocZ(int $locZ): self
    {
        $this->locZ = $locZ;

        return $this;
    }

    public function getHeading(): ?int
    {
        return $this->heading;
    }

    public function setHeading(int $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    public function getRespawnTime(): ?string
    {
        return $this->respawnTime;
    }

    public function setRespawnTime(string $respawnTime): self
    {
        $this->respawnTime = $respawnTime;

        return $this;
    }

    public function getCurrenthp(): ?string
    {
        return $this->currenthp;
    }

    public function setCurrenthp(string $currenthp): self
    {
        $this->currenthp = $currenthp;

        return $this;
    }

    public function getCurrentmp(): ?string
    {
        return $this->currentmp;
    }

    public function setCurrentmp(string $currentmp): self
    {
        $this->currentmp = $currentmp;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }


}
