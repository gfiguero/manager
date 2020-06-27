<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoryRegistrations
 *
 * @ORM\Table(name="l2j_gs.territory_registrations")
 * @ORM\Entity
 */
class TerritoryRegistrations
{
    /**
     * @var int
     *
     * @ORM\Column(name="castleId", type="integer", nullable=false, options={"default" = 0})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $castleid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="registeredId", type="integer", nullable=false, options={"default" = 0})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $registeredid = '0';

    public function getCastleid(): ?int
    {
        return $this->castleid;
    }

    public function getRegisteredid(): ?int
    {
        return $this->registeredid;
    }


}
