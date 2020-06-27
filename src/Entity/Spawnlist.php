<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spawnlist
 *
 * @ORM\Table(name="l2j_gs.spawnlist")
 * @ORM\Entity
 */
class Spawnlist
{
    /**
     * @var int
     *
     * @ORM\Column(name="npc_templateid", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $npcTemplateid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locx", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locx = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locy", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locy = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locz", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=40, nullable=false, options={"default"=""})
     */
    private $location = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="count", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $count = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="randomx", type="integer", nullable=false, options={"default"="0"})
     */
    private $randomx = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="randomy", type="integer", nullable=false, options={"default"="0"})
     */
    private $randomy = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="heading", type="integer", nullable=false, options={"default"="0"})
     */
    private $heading = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="respawn_delay", type="integer", nullable=false, options={"default"="0"})
     */
    private $respawnDelay = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="respawn_random", type="integer", nullable=false, options={"default"="0"})
     */
    private $respawnRandom = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loc_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $locId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="periodOfDay", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $periodofday = '0';

    public function getNpcTemplateid(): ?int
    {
        return $this->npcTemplateid;
    }

    public function getLocx(): ?int
    {
        return $this->locx;
    }

    public function getLocy(): ?int
    {
        return $this->locy;
    }

    public function getLocz(): ?int
    {
        return $this->locz;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getCount(): ?bool
    {
        return $this->count;
    }

    public function setCount(bool $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getRandomx(): ?int
    {
        return $this->randomx;
    }

    public function setRandomx(int $randomx): self
    {
        $this->randomx = $randomx;

        return $this;
    }

    public function getRandomy(): ?int
    {
        return $this->randomy;
    }

    public function setRandomy(int $randomy): self
    {
        $this->randomy = $randomy;

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

    public function getLocId(): ?int
    {
        return $this->locId;
    }

    public function setLocId(int $locId): self
    {
        $this->locId = $locId;

        return $this;
    }

    public function getPeriodofday(): ?bool
    {
        return $this->periodofday;
    }

    public function setPeriodofday(bool $periodofday): self
    {
        $this->periodofday = $periodofday;

        return $this;
    }


}
