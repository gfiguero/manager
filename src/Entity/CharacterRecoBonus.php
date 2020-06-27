<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterRecoBonus
 *
 * @ORM\Table(name="l2j_gs.character_reco_bonus", uniqueConstraints={@ORM\UniqueConstraint(name="charId", columns={"charId"})})
 * @ORM\Entity
 */
class CharacterRecoBonus
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
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $charid;

    /**
     * @var bool
     *
     * @ORM\Column(name="rec_have", type="boolean", length=3, nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $recHave = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="rec_left", type="boolean", length=3, nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $recLeft = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="time_left", type="bigint", length=13, nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $timeLeft = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function setCharid(int $charid): self
    {
        $this->charid = $charid;

        return $this;
    }

    public function getRecHave(): ?bool
    {
        return $this->recHave;
    }

    public function setRecHave(bool $recHave): self
    {
        $this->recHave = $recHave;

        return $this;
    }

    public function getRecLeft(): ?bool
    {
        return $this->recLeft;
    }

    public function setRecLeft(bool $recLeft): self
    {
        $this->recLeft = $recLeft;

        return $this;
    }

    public function getTimeLeft(): ?string
    {
        return $this->timeLeft;
    }

    public function setTimeLeft(string $timeLeft): self
    {
        $this->timeLeft = $timeLeft;

        return $this;
    }


}
