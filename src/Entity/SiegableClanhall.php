<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiegableClanhall
 *
 * @ORM\Table(name="l2j_gs.siegable_clanhall", indexes={@ORM\Index(name="ownerId", columns={"ownerId"})})
 * @ORM\Entity
 */
class SiegableClanhall
{
    /**
     * @var int
     *
     * @ORM\Column(name="clanHallId", type="integer", nullable=false, options={"default" = 0})
     * @ORM\Id
     */
    private $clanhallid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ownerId", type="integer", nullable=true)
     */
    private $ownerid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc", type="string", length=100, nullable=true)
     */
    private $desc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nextSiege", type="bigint", nullable=true)
     */
    private $nextsiege;

    /**
     * @var int|null
     *
     * @ORM\Column(name="siegeLenght", type="integer", nullable=true)
     */
    private $siegelenght;

    /**
     * @var string|null
     *
     * @ORM\Column(name="schedule_config", type="string", length=20, nullable=true)
     */
    private $scheduleConfig;

    public function getClanhallid(): ?int
    {
        return $this->clanhallid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOwnerid(): ?int
    {
        return $this->ownerid;
    }

    public function setOwnerid(?int $ownerid): self
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getNextsiege(): ?string
    {
        return $this->nextsiege;
    }

    public function setNextsiege(?string $nextsiege): self
    {
        $this->nextsiege = $nextsiege;

        return $this;
    }

    public function getSiegelenght(): ?int
    {
        return $this->siegelenght;
    }

    public function setSiegelenght(?int $siegelenght): self
    {
        $this->siegelenght = $siegelenght;

        return $this;
    }

    public function getScheduleConfig(): ?string
    {
        return $this->scheduleConfig;
    }

    public function setScheduleConfig(?string $scheduleConfig): self
    {
        $this->scheduleConfig = $scheduleConfig;

        return $this;
    }


}
