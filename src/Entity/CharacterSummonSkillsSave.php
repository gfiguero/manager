<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSummonSkillsSave
 *
 * @ORM\Table(name="l2j_gs.character_summon_skills_save")
 * @ORM\Entity
 */
class CharacterSummonSkillsSave
{
    /**
     * @var int
     *
     * @ORM\Column(name="ownerId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $ownerid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ownerClassIndex", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $ownerclassindex = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="summonSkillId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $summonskillid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $skillId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_level", type="integer", nullable=false, options={"default"="1"})
     * @ORM\Id
     */
    private $skillLevel = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="remaining_time", type="integer", nullable=false, options={"default"="0"})
     */
    private $remainingTime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="buff_index", type="integer", nullable=false, options={"default"="0"})
     */
    private $buffIndex = '0';

    public function getSkillId(): ?int
    {
        return $this->skillId;
    }

    public function getSkillLevel(): ?int
    {
        return $this->skillLevel;
    }

    public function getOwnerid(): ?int
    {
        return $this->ownerid;
    }

    public function getOwnerclassindex(): ?int
    {
        return $this->ownerclassindex;
    }

    public function getSummonskillid(): ?int
    {
        return $this->summonskillid;
    }

    public function getRemainingTime(): ?int
    {
        return $this->remainingTime;
    }

    public function setRemainingTime(int $remainingTime): self
    {
        $this->remainingTime = $remainingTime;

        return $this;
    }

    public function getBuffIndex(): ?int
    {
        return $this->buffIndex;
    }

    public function setBuffIndex(int $buffIndex): self
    {
        $this->buffIndex = $buffIndex;

        return $this;
    }


}
