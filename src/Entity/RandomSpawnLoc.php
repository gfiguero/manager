<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RandomSpawnLoc
 *
 * @ORM\Table(name="l2j_gs.random_spawn_loc")
 * @ORM\Entity
 */
class RandomSpawnLoc
{
    /**
     * @var bool
     *
     * @ORM\Column(name="groupId", type="boolean", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $groupid;

    /**
     * @var int
     *
     * @ORM\Column(name="x", type="integer", nullable=false)
     * @ORM\Id
     */
    private $x;

    /**
     * @var int
     *
     * @ORM\Column(name="y", type="integer", nullable=false)
     * @ORM\Id
     */
    private $y;

    /**
     * @var int
     *
     * @ORM\Column(name="z", type="integer", nullable=false)
     * @ORM\Id
     */
    private $z;

    /**
     * @var int
     *
     * @ORM\Column(name="heading", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $heading = '0';

    public function getX(): ?int
    {
        return $this->x;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function getZ(): ?int
    {
        return $this->z;
    }

    public function getHeading(): ?int
    {
        return $this->heading;
    }

    public function getGroupid(): ?bool
    {
        return $this->groupid;
    }


}
