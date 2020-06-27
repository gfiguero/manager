<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterVariables
 *
 * @ORM\Table(name="l2j_gs.character_variables")
 * @ORM\Entity
 */
class CharacterVariables
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $charid;

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=255, nullable=false)
     */
    private $var;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="text", length=65535, nullable=false)
     */
    private $val;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function setCharid(int $charid): self
    {
        $this->charid = $charid;

        return $this;
    }

    public function getVar(): ?string
    {
        return $this->var;
    }

    public function setVar(string $var): self
    {
        $this->var = $var;

        return $this;
    }

    public function getVal(): ?string
    {
        return $this->val;
    }

    public function setVal(string $val): self
    {
        $this->val = $val;

        return $this;
    }


}
