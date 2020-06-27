<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomSpawnlist
 *
 * @ORM\Table(name="l2j_gs.custom_spawnlist")
 * @ORM\Entity
 */
class CustomSpawnlist
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
     * @ORM\Column(name="npc_templateid", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $npcTemplateid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locx", type="integer", nullable=false, options={"default"="0"})
     */
    private $locx = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locy", type="integer", nullable=false, options={"default"="0"})
     */
    private $locy = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locz", type="integer", nullable=false, options={"default"="0"})
     */
    private $locz = '0';

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

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNpcTemplateid(): ?int
    {
        return $this->npcTemplateid;
    }

    public function setNpcTemplateid(int $npcTemplateid): self
    {
        $this->npcTemplateid = $npcTemplateid;

        return $this;
    }

    public function getLocx(): ?int
    {
        return $this->locx;
    }

    public function setLocx(int $locx): self
    {
        $this->locx = $locx;

        return $this;
    }

    public function getLocy(): ?int
    {
        return $this->locy;
    }

    public function setLocy(int $locy): self
    {
        $this->locy = $locy;

        return $this;
    }

    public function getLocz(): ?int
    {
        return $this->locz;
    }

    public function setLocz(int $locz): self
    {
        $this->locz = $locz;

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
