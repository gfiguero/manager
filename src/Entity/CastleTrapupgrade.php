<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CastleTrapupgrade
 *
 * @ORM\Table(name="l2j_gs.castle_trapupgrade")
 * @ORM\Entity
 */
class CastleTrapupgrade
{
    /**
     * @var bool
     *
     * @ORM\Column(name="towerIndex", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $towerindex = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="castleId", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $castleid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="level", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $level = '0';

    public function getCastleid(): ?bool
    {
        return $this->castleid;
    }

    public function getTowerindex(): ?bool
    {
        return $this->towerindex;
    }

    public function getLevel(): ?bool
    {
        return $this->level;
    }

    public function setLevel(bool $level): self
    {
        $this->level = $level;

        return $this;
    }


}
