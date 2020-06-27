<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiegableHallFlagwarAttackers
 *
 * @ORM\Table(name="l2j_gs.siegable_hall_flagwar_attackers", indexes={@ORM\Index(name="hall_id", columns={"hall_id"}), @ORM\Index(name="clan_id", columns={"clan_id"})})
 * @ORM\Entity
 */
class SiegableHallFlagwarAttackers
{
    /**
     * @var int
     *
     * @ORM\Column(name="flag", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $flag = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hall_id", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $hallId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="npc", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $npc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $clanId = '0';

    public function getFlag(): ?int
    {
        return $this->flag;
    }

    public function getHallId(): ?bool
    {
        return $this->hallId;
    }

    public function setHallId(bool $hallId): self
    {
        $this->hallId = $hallId;

        return $this;
    }

    public function getNpc(): ?int
    {
        return $this->npc;
    }

    public function setNpc(int $npc): self
    {
        $this->npc = $npc;

        return $this;
    }

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function setClanId(int $clanId): self
    {
        $this->clanId = $clanId;

        return $this;
    }


}
