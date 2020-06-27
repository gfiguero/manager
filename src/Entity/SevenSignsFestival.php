<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SevenSignsFestival
 *
 * @ORM\Table(name="l2j_gs.seven_signs_festival")
 * @ORM\Entity
 */
class SevenSignsFestival
{
    /**
     * @var int
     *
     * @ORM\Column(name="festivalId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $festivalid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cabal", type="string", length=4, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $cabal = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cycle", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $cycle = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="date", type="bigint", length=13, nullable=false, options={"unsigned"=true,"default"="0"})
     */
    private $date = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=false, options={"default"="0"})
     */
    private $score = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="members", type="string", length=255, nullable=false, options={"default"=""})
     */
    private $members = '';

    public function getCabal(): ?string
    {
        return $this->cabal;
    }

    public function getCycle(): ?int
    {
        return $this->cycle;
    }

    public function getFestivalid(): ?int
    {
        return $this->festivalid;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getMembers(): ?string
    {
        return $this->members;
    }

    public function setMembers(string $members): self
    {
        $this->members = $members;

        return $this;
    }


}
