<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiegableHallFlagwarAttackersMembers
 *
 * @ORM\Table(name="l2j_gs.siegable_hall_flagwar_attackers_members", indexes={@ORM\Index(name="hall_id", columns={"hall_id"}), @ORM\Index(name="clan_id", columns={"clan_id"}), @ORM\Index(name="object_id", columns={"object_id"})})
 * @ORM\Entity
 */
class SiegableHallFlagwarAttackersMembers
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
     * @var bool
     *
     * @ORM\Column(name="hall_id", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $hallId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $clanId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $objectId = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function setClanId(int $clanId): self
    {
        $this->clanId = $clanId;

        return $this;
    }

    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    public function setObjectId(int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }


}
