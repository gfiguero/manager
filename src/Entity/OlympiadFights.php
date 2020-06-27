<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlympiadFights
 *
 * @ORM\Table(name="l2j_gs.olympiad_fights", indexes={@ORM\Index(name="charOneId", columns={"charOneId"}), @ORM\Index(name="charTwoId", columns={"charTwoId"})})
 * @ORM\Entity
 */
class OlympiadFights
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
     * @var int
     *
     * @ORM\Column(name="charOneId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $charoneid;

    /**
     * @var int
     *
     * @ORM\Column(name="charTwoId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $chartwoid;

    /**
     * @var bool
     *
     * @ORM\Column(name="charOneClass", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $charoneclass = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="charTwoClass", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $chartwoclass = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="winner", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $winner = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="start", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $start = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $time = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="classed", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $classed = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharoneid(): ?int
    {
        return $this->charoneid;
    }

    public function setCharoneid(int $charoneid): self
    {
        $this->charoneid = $charoneid;

        return $this;
    }

    public function getChartwoid(): ?int
    {
        return $this->chartwoid;
    }

    public function setChartwoid(int $chartwoid): self
    {
        $this->chartwoid = $chartwoid;

        return $this;
    }

    public function getCharoneclass(): ?bool
    {
        return $this->charoneclass;
    }

    public function setCharoneclass(bool $charoneclass): self
    {
        $this->charoneclass = $charoneclass;

        return $this;
    }

    public function getChartwoclass(): ?bool
    {
        return $this->chartwoclass;
    }

    public function setChartwoclass(bool $chartwoclass): self
    {
        $this->chartwoclass = $chartwoclass;

        return $this;
    }

    public function getWinner(): ?bool
    {
        return $this->winner;
    }

    public function setWinner(bool $winner): self
    {
        $this->winner = $winner;

        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(string $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getClassed(): ?bool
    {
        return $this->classed;
    }

    public function setClassed(bool $classed): self
    {
        $this->classed = $classed;

        return $this;
    }


}
