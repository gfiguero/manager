<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiegeClans
 *
 * @ORM\Table(name="l2j_gs.siege_clans")
 * @ORM\Entity
 */
class SiegeClans
{
    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $clanId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="castle_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $castleId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="castle_owner", type="integer", nullable=true)
     */
    private $castleOwner;

    public function getCastleId(): ?int
    {
        return $this->castleId;
    }

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCastleOwner(): ?int
    {
        return $this->castleOwner;
    }

    public function setCastleOwner(?int $castleOwner): self
    {
        $this->castleOwner = $castleOwner;

        return $this;
    }


}
