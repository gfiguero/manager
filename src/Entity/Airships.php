<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Airships
 *
 * @ORM\Table(name="l2j_gs.airships")
 * @ORM\Entity
 */
class Airships
{
    /**
     * @var int
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $ownerId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fuel", type="decimal", precision=5, scale=0, nullable=false, options={"default"="600"})
     */
    private $fuel = '600';

    public function getOwnerId(): ?int
    {
        return $this->ownerId;
    }

    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }


}
