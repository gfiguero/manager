<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaidbossSpawnlist
 *
 * @ORM\Table(name="l2j_gs.raidboss_spawnlist")
 * @ORM\Entity
 */
class RaidbossSpawnlist
{
    /**
     * @var int
     *
     * @ORM\Column(name="boss_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $bossId;

    /**
     * @var bool
     *
     * @ORM\Column(name="amount", type="boolean", nullable=false, options={"unsigned"=true, "default"="1"})
     */
    private $amount = true;

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
     * @ORM\Column(name="respawn_delay", type="integer", nullable=false, options={"default"="129600","unsigned"=true})
     */
    private $respawnDelay = '129600';

    /**
     * @var int
     *
     * @ORM\Column(name="respawn_random", type="integer", nullable=false, options={"default"="86400","unsigned"=true})
     */
    private $respawnRandom = '86400';

    /**
     * @var int
     *
     * @ORM\Column(name="respawn_time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $respawnTime = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="currentHp", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $currenthp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currentMp", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $currentmp;

    public function getBossId(): ?int
    {
        return $this->bossId;
    }

    public function getAmount(): ?bool
    {
        return $this->amount;
    }

    public function setAmount(bool $amount): self
    {
        $this->amount = $amount;

        return $this;
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

    public function getRespawnDelay(): ?int
    {
        return $this->respawnDelay;
    }

    public function setRespawnDelay(int $respawnDelay): self
    {
        $this->respawnDelay = $respawnDelay;

        return $this;
    }

    public function getRespawnRandom(): ?int
    {
        return $this->respawnRandom;
    }

    public function setRespawnRandom(int $respawnRandom): self
    {
        $this->respawnRandom = $respawnRandom;

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

    public function setCurrenthp(?string $currenthp): self
    {
        $this->currenthp = $currenthp;

        return $this;
    }

    public function getCurrentmp(): ?string
    {
        return $this->currentmp;
    }

    public function setCurrentmp(?string $currentmp): self
    {
        $this->currentmp = $currentmp;

        return $this;
    }


}
