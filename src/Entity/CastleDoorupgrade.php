<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CastleDoorupgrade
 *
 * @ORM\Table(name="l2j_gs.castle_doorupgrade")
 * @ORM\Entity
 */
class CastleDoorupgrade
{
    /**
     * @var int
     *
     * @ORM\Column(name="doorId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $doorid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ratio", type="boolean", length=3, nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $ratio = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="castleId", type="boolean", length=3, nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $castleid = '0';

    public function getDoorid(): ?int
    {
        return $this->doorid;
    }

    public function getRatio(): ?bool
    {
        return $this->ratio;
    }

    public function setRatio(bool $ratio): self
    {
        $this->ratio = $ratio;

        return $this;
    }

    public function getCastleid(): ?bool
    {
        return $this->castleid;
    }

    public function setCastleid(bool $castleid): self
    {
        $this->castleid = $castleid;

        return $this;
    }


}
