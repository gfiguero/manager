<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSkillsSave
 *
 * @ORM\Table(name="l2j_gs.character_skills_save")
 * @ORM\Entity
 */
class CharacterSkillsSave
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

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
     * @ORM\Column(name="class_index", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $classIndex = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="remaining_time", type="integer", nullable=false, options={"default"="0"})
     */
    private $remainingTime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reuse_delay", type="integer", nullable=false, options={"default"="0"})
     */
    private $reuseDelay = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="systime", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $systime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="restore_type", type="integer", nullable=false, options={"default"="0"})
     */
    private $restoreType = '0';

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

    public function getClassIndex(): ?int
    {
        return $this->classIndex;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
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

    public function getReuseDelay(): ?int
    {
        return $this->reuseDelay;
    }

    public function setReuseDelay(int $reuseDelay): self
    {
        $this->reuseDelay = $reuseDelay;

        return $this;
    }

    public function getSystime(): ?string
    {
        return $this->systime;
    }

    public function setSystime(string $systime): self
    {
        $this->systime = $systime;

        return $this;
    }

    public function getRestoreType(): ?int
    {
        return $this->restoreType;
    }

    public function setRestoreType(int $restoreType): self
    {
        $this->restoreType = $restoreType;

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
