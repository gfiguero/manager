<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterShortcuts
 *
 * @ORM\Table(name="l2j_gs.character_shortcuts", indexes={@ORM\Index(name="shortcut_id", columns={"shortcut_id"})})
 * @ORM\Entity
 */
class CharacterShortcuts
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="slot", type="decimal", precision=3, scale=0, nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $slot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="decimal", precision=3, scale=0, nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $page = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="class_index", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $classIndex = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shortcut_id", type="decimal", precision=16, scale=0, nullable=true)
     */
    private $shortcutId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="level", type="string", length=4, nullable=true)
     */
    private $level;

    public function getSlot(): ?string
    {
        return $this->slot;
    }

    public function getPage(): ?string
    {
        return $this->page;
    }

    public function getClassIndex(): ?int
    {
        return $this->classIndex;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getShortcutId(): ?string
    {
        return $this->shortcutId;
    }

    public function setShortcutId(?string $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }


}
