<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="l2j_gs.locations", indexes={@ORM\Index(name="proc", columns={"proc"})})
 * @ORM\Entity
 */
class Locations
{
    /**
     * @var int
     *
     * @ORM\Column(name="loc_id", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loc_x", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locX = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loc_y", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locY = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loc_zmin", type="integer", nullable=false, options={"default"="0"})
     */
    private $locZmin = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loc_zmax", type="integer", nullable=false, options={"default"="0"})
     */
    private $locZmax = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="proc", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $proc = '0';

    public function getLocId(): ?int
    {
        return $this->locId;
    }

    public function getLocX(): ?int
    {
        return $this->locX;
    }

    public function getLocY(): ?int
    {
        return $this->locY;
    }

    public function getLocZmin(): ?int
    {
        return $this->locZmin;
    }

    public function setLocZmin(int $locZmin): self
    {
        $this->locZmin = $locZmin;

        return $this;
    }

    public function getLocZmax(): ?int
    {
        return $this->locZmax;
    }

    public function setLocZmax(int $locZmax): self
    {
        $this->locZmax = $locZmax;

        return $this;
    }

    public function getProc(): ?bool
    {
        return $this->proc;
    }

    public function setProc(bool $proc): self
    {
        $this->proc = $proc;

        return $this;
    }


}
