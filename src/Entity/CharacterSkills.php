<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSkills
 *
 * @ORM\Table(name="l2j_gs.character_skills")
 * @ORM\Entity
 */
class CharacterSkills
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
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
     * @ORM\Column(name="class_index", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $classIndex = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skill_level", type="integer", nullable=false, options={"default"="1"})
     */
    private $skillLevel = '1';

    public function getSkillId(): ?int
    {
        return $this->skillId;
    }

    public function getClassIndex(): ?int
    {
        return $this->classIndex;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
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


}
