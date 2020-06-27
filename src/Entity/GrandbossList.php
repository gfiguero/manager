<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrandbossList
 *
 * @ORM\Table(name="l2j_gs.grandboss_list")
 * @ORM\Entity
 */
class GrandbossList
{
    /**
     * @var string
     *
     * @ORM\Column(name="player_id", type="decimal", precision=11, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $playerId;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="decimal", precision=11, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $zone;

    public function getPlayerId(): ?string
    {
        return $this->playerId;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }


}
