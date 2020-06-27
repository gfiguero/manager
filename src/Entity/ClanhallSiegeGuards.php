<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanhallSiegeGuards
 *
 * @ORM\Table(name="l2j_gs.clanhall_siege_guards", indexes={@ORM\Index(name="clanHallId", columns={"clanHallId"})})
 * @ORM\Entity
 */
class ClanhallSiegeGuards
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
     * @var bool
     *
     * @ORM\Column(name="clanHallId", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $clanhallid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="npcId", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $npcid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="x", type="integer", nullable=false, options={"default"="0"})
     */
    private $x = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="y", type="integer", nullable=false, options={"default"="0"})
     */
    private $y = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="z", type="integer", nullable=false, options={"default"="0"})
     */
    private $z = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="heading", type="integer", nullable=false, options={"default"="0"})
     */
    private $heading = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="respawnDelay", type="integer", nullable=false, options={"default"="0"})
     */
    private $respawndelay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="isSiegeBoss", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $issiegeboss = 'false';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClanhallid(): ?bool
    {
        return $this->clanhallid;
    }

    public function setClanhallid(bool $clanhallid): self
    {
        $this->clanhallid = $clanhallid;

        return $this;
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

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): ?int
    {
        return $this->z;
    }

    public function setZ(int $z): self
    {
        $this->z = $z;

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

    public function getRespawndelay(): ?int
    {
        return $this->respawndelay;
    }

    public function setRespawndelay(int $respawndelay): self
    {
        $this->respawndelay = $respawndelay;

        return $this;
    }

    public function getIssiegeboss(): ?string
    {
        return $this->issiegeboss;
    }

    public function setIssiegeboss(string $issiegeboss): self
    {
        $this->issiegeboss = $issiegeboss;

        return $this;
    }


}
