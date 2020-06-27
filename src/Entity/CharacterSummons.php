<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSummons
 *
 * @ORM\Table(name="l2j_gs.character_summons")
 * @ORM\Entity
 */
class CharacterSummons
{
    /**
     * @var int
     *
     * @ORM\Column(name="ownerId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $ownerid;

    /**
     * @var int
     *
     * @ORM\Column(name="summonSkillId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $summonskillid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="curHp", type="integer", nullable=true, options={"unsigned"=true, "default"="0"})
     */
    private $curhp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="curMp", type="integer", nullable=true, options={"unsigned"=true, "default"="0"})
     */
    private $curmp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $time = '0';

    public function getOwnerid(): ?int
    {
        return $this->ownerid;
    }

    public function getSummonskillid(): ?int
    {
        return $this->summonskillid;
    }

    public function getCurhp(): ?int
    {
        return $this->curhp;
    }

    public function setCurhp(?int $curhp): self
    {
        $this->curhp = $curhp;

        return $this;
    }

    public function getCurmp(): ?int
    {
        return $this->curmp;
    }

    public function setCurmp(?int $curmp): self
    {
        $this->curmp = $curmp;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }


}
