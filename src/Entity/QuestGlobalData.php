<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestGlobalData
 *
 * @ORM\Table(name="l2j_gs.quest_global_data")
 * @ORM\Entity
 */
class QuestGlobalData
{
    /**
     * @var string
     *
     * @ORM\Column(name="quest_name", type="string", length=40, nullable=false, options={"default"=""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=20, nullable=false, options={"default"=""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $var = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    public function getQuestName(): ?string
    {
        return $this->questName;
    }

    public function getVar(): ?string
    {
        return $this->var;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
