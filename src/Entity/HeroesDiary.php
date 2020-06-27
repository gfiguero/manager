<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HeroesDiary
 *
 * @ORM\Table(name="l2j_gs.heroes_diary", indexes={@ORM\Index(name="charId", columns={"charId"})})
 * @ORM\Entity
 */
class HeroesDiary
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
     * @var int
     *
     * @ORM\Column(name="time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $time = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="action", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $action = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="param", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $param = '0';

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

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getAction(): ?bool
    {
        return $this->action;
    }

    public function setAction(bool $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getParam(): ?int
    {
        return $this->param;
    }

    public function setParam(int $param): self
    {
        $this->param = $param;

        return $this;
    }


}
