<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Territories
 *
 * @ORM\Table(name="l2j_gs.territories")
 * @ORM\Entity
 */
class Territories
{
    /**
     * @var int
     *
     * @ORM\Column(name="territoryId", type="integer", nullable=false, options={"default" = 0})
     * @ORM\Id
     */
    private $territoryid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="castleId", type="integer", nullable=false, options={"default" = 0})
     */
    private $castleid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fortId", type="integer", nullable=false, options={"default" = 0})
     */
    private $fortid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ownedWardIds", type="string", length=30, nullable=false, options={"default" = 0})
     */
    private $ownedwardids = '';

    public function getTerritoryid(): ?int
    {
        return $this->territoryid;
    }

    public function getCastleid(): ?int
    {
        return $this->castleid;
    }

    public function setCastleid(int $castleid): self
    {
        $this->castleid = $castleid;

        return $this;
    }

    public function getFortid(): ?int
    {
        return $this->fortid;
    }

    public function setFortid(int $fortid): self
    {
        $this->fortid = $fortid;

        return $this;
    }

    public function getOwnedwardids(): ?string
    {
        return $this->ownedwardids;
    }

    public function setOwnedwardids(string $ownedwardids): self
    {
        $this->ownedwardids = $ownedwardids;

        return $this;
    }


}
