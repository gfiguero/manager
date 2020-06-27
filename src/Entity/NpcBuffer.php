<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcBuffer
 *
 * @ORM\Table(name="l2j_gs.npc_buffer")
 * @ORM\Entity
 */
class NpcBuffer
{
    /**
     * @var int
     *
     * @ORM\Column(name="npc_id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $npcId;

    /**
     * @var int
     *
     * @ORM\Column(name="skill_id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $skillId;

    /**
     * @var int
     *
     * @ORM\Column(name="buff_group", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $buffGroup = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_level", type="integer", nullable=false, options={"default"="1"})
     */
    private $skillLevel = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_fee_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $skillFeeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_fee_amount", type="integer", nullable=false, options={"default"="0"})
     */
    private $skillFeeAmount = '0';

    public function getNpcId(): ?int
    {
        return $this->npcId;
    }

    public function getSkillId(): ?int
    {
        return $this->skillId;
    }

    public function getBuffGroup(): ?int
    {
        return $this->buffGroup;
    }

    public function getSkillLevel(): ?int
    {
        return $this->skillLevel;
    }

    public function setSkillLevel(int $skillLevel): self
    {
        $this->skillLevel = $skillLevel;

        return $this;
    }

    public function getSkillFeeId(): ?int
    {
        return $this->skillFeeId;
    }

    public function setSkillFeeId(int $skillFeeId): self
    {
        $this->skillFeeId = $skillFeeId;

        return $this;
    }

    public function getSkillFeeAmount(): ?int
    {
        return $this->skillFeeAmount;
    }

    public function setSkillFeeAmount(int $skillFeeAmount): self
    {
        $this->skillFeeAmount = $skillFeeAmount;

        return $this;
    }


}
