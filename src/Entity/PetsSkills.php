<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetsSkills
 *
 * @ORM\Table(name="l2j_gs.pets_skills")
 * @ORM\Entity
 */
class PetsSkills
{
    /**
     * @var int
     *
     * @ORM\Column(name="templateId", type="smallint", length=5, nullable=false, options={"unsigned"=true, "default" = 0})
     * @ORM\Id
     */
    private $templateid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="minLvl", type="boolean", length=2, nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $minlvl = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skillId", type="smallint", length=5, nullable=false, options={"unsigned"=true, "default" = 0})
     * @ORM\Id
     */
    private $skillid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="skillLvl", type="boolean", length=2, nullable=false, options={"unsigned"=true, "default" = 0})
     * @ORM\Id
     */
    private $skilllvl = '0';

    public function getTemplateid(): ?int
    {
        return $this->templateid;
    }

    public function getMinlvl(): ?bool
    {
        return $this->minlvl;
    }

    public function setMinlvl(bool $minlvl): self
    {
        $this->minlvl = $minlvl;

        return $this;
    }

    public function getSkillid(): ?int
    {
        return $this->skillid;
    }

    public function getSkilllvl(): ?bool
    {
        return $this->skilllvl;
    }


}
