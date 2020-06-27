<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanhallSiegeAttackers
 *
 * @ORM\Table(name="l2j_gs.clanhall_siege_attackers")
 * @ORM\Entity
 */
class ClanhallSiegeAttackers
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
     * @ORM\Column(name="clanhall_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $clanhallId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="attacker_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $attackerId = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClanhallId(): ?int
    {
        return $this->clanhallId;
    }

    public function setClanhallId(int $clanhallId): self
    {
        $this->clanhallId = $clanhallId;

        return $this;
    }

    public function getAttackerId(): ?int
    {
        return $this->attackerId;
    }

    public function setAttackerId(int $attackerId): self
    {
        $this->attackerId = $attackerId;

        return $this;
    }


}
