<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Punishments
 *
 * @ORM\Table(name="l2j_gs.punishments")
 * @ORM\Entity
 */
class Punishments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="affect", type="string", length=255, nullable=false)
     */
    private $affect;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="expiration", type="bigint", nullable=false)
     */
    private $expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text", length=65535, nullable=false)
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="punishedBy", type="string", length=255, nullable=false)
     */
    private $punishedby;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getAffect(): ?string
    {
        return $this->affect;
    }

    public function setAffect(string $affect): self
    {
        $this->affect = $affect;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    public function setExpiration(string $expiration): self
    {
        $this->expiration = $expiration;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getPunishedby(): ?string
    {
        return $this->punishedby;
    }

    public function setPunishedby(string $punishedby): self
    {
        $this->punishedby = $punishedby;

        return $this;
    }


}
