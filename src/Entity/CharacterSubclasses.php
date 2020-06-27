<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSubclasses
 *
 * @ORM\Table(name="l2j_gs.character_subclasses")
 * @ORM\Entity
 */
class CharacterSubclasses
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
     * @ORM\Column(name="class_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $classId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="exp", type="decimal", precision=20, scale=0, nullable=false, options={"default"="0"})
     */
    private $exp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sp", type="decimal", precision=11, scale=0, nullable=false, options={"default"="0"})
     */
    private $sp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false, options={"default"="40"})
     */
    private $level = '40';

    /**
     * @var int
     *
     * @ORM\Column(name="class_index", type="integer", nullable=false, options={"default"="0"})
     */
    private $classIndex = '0';

    public function getClassId(): ?int
    {
        return $this->classId;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getExp(): ?string
    {
        return $this->exp;
    }

    public function setExp(string $exp): self
    {
        $this->exp = $exp;

        return $this;
    }

    public function getSp(): ?string
    {
        return $this->sp;
    }

    public function setSp(string $sp): self
    {
        $this->sp = $sp;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getClassIndex(): ?int
    {
        return $this->classIndex;
    }

    public function setClassIndex(int $classIndex): self
    {
        $this->classIndex = $classIndex;

        return $this;
    }


}
