<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterRaidPoints
 *
 * @ORM\Table(name="l2j_gs.character_raid_points")
 * @ORM\Entity
 */
class CharacterRaidPoints
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="boss_id", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $bossId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $points = '0';

    public function getBossId(): ?int
    {
        return $this->bossId;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }


}
