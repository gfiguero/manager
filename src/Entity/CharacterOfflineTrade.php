<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterOfflineTrade
 *
 * @ORM\Table(name="l2j_gs.character_offline_trade")
 * @ORM\Entity
 */
class CharacterOfflineTrade
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $charid;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="bigint", nullable=false, options={"unsigned"=true,"default"="0"})
     */
    private $time = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false, options={"default"="0"})
     */
    private $type = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    public function getCharid(): ?int
    {
        return $this->charid;
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

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }


}
