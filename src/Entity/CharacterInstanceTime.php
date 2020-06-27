<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterInstanceTime
 *
 * @ORM\Table(name="l2j_gs.character_instance_time")
 * @ORM\Entity
 */
class CharacterInstanceTime
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
     * @ORM\Column(name="instanceId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $instanceid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $time = '0';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getInstanceid(): ?int
    {
        return $this->instanceid;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }


}
