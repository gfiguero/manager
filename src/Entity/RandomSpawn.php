<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RandomSpawn
 *
 * @ORM\Table(name="l2j_gs.random_spawn")
 * @ORM\Entity
 */
class RandomSpawn
{
    /**
     * @var bool
     *
     * @ORM\Column(name="groupId", type="boolean", length=3, nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $groupid;

    /**
     * @var int
     *
     * @ORM\Column(name="npcId", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $npcid;

    /**
     * @var bool
     *
     * @ORM\Column(name="count", type="boolean", nullable=false, options={"unsigned"=true, "default"="1"})
     */
    private $count = true;

    /**
     * @var int
     *
     * @ORM\Column(name="initialDelay", type="integer", nullable=false, options={"default"="-1"})
     */
    private $initialdelay = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="respawnDelay", type="integer", nullable=false, options={"default"="-1"})
     */
    private $respawndelay = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="despawnDelay", type="integer", nullable=false, options={"default"="-1"})
     */
    private $despawndelay = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="broadcastSpawn", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $broadcastspawn = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="randomSpawn", type="string", length=0, nullable=false, options={"default"="true"})
     */
    private $randomspawn = 'true';

    public function getGroupid(): ?bool
    {
        return $this->groupid;
    }

    public function getNpcid(): ?int
    {
        return $this->npcid;
    }

    public function setNpcid(int $npcid): self
    {
        $this->npcid = $npcid;

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

    public function getInitialdelay(): ?int
    {
        return $this->initialdelay;
    }

    public function setInitialdelay(int $initialdelay): self
    {
        $this->initialdelay = $initialdelay;

        return $this;
    }

    public function getRespawndelay(): ?int
    {
        return $this->respawndelay;
    }

    public function setRespawndelay(int $respawndelay): self
    {
        $this->respawndelay = $respawndelay;

        return $this;
    }

    public function getDespawndelay(): ?int
    {
        return $this->despawndelay;
    }

    public function setDespawndelay(int $despawndelay): self
    {
        $this->despawndelay = $despawndelay;

        return $this;
    }

    public function getBroadcastspawn(): ?string
    {
        return $this->broadcastspawn;
    }

    public function setBroadcastspawn(string $broadcastspawn): self
    {
        $this->broadcastspawn = $broadcastspawn;

        return $this;
    }

    public function getRandomspawn(): ?string
    {
        return $this->randomspawn;
    }

    public function setRandomspawn(string $randomspawn): self
    {
        $this->randomspawn = $randomspawn;

        return $this;
    }


}
