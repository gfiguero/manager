<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanSkills
 *
 * @ORM\Table(name="l2j_gs.clan_skills")
 * @ORM\Entity
 */
class ClanSkills
{
    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $clanId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $skillId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sub_pledge_id", type="integer", nullable=false, options={"default"="-2"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $subPledgeId = '-2';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_level", type="integer", nullable=false, options={"default"="0"})
     */
    private $skillLevel = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="skill_name", type="string", length=26, nullable=true)
     */
    private $skillName;

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function getSkillId(): ?int
    {
        return $this->skillId;
    }

    public function getSubPledgeId(): ?int
    {
        return $this->subPledgeId;
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

    public function getSkillName(): ?string
    {
        return $this->skillName;
    }

    public function setSkillName(?string $skillName): self
    {
        $this->skillName = $skillName;

        return $this;
    }


}
