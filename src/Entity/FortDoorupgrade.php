<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FortDoorupgrade
 *
 * @ORM\Table(name="l2j_gs.fort_doorupgrade")
 * @ORM\Entity
 */
class FortDoorupgrade
{
    /**
     * @var int
     *
     * @ORM\Column(name="doorId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $doorid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fortId", type="integer", nullable=false)
     */
    private $fortid;

    /**
     * @var int
     *
     * @ORM\Column(name="hp", type="integer", nullable=false, options={"default"="0"})
     */
    private $hp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pDef", type="integer", nullable=false, options={"default"="0"})
     */
    private $pdef = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mDef", type="integer", nullable=false, options={"default"="0"})
     */
    private $mdef = '0';

    public function getDoorid(): ?int
    {
        return $this->doorid;
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

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getPdef(): ?int
    {
        return $this->pdef;
    }

    public function setPdef(int $pdef): self
    {
        $this->pdef = $pdef;

        return $this;
    }

    public function getMdef(): ?int
    {
        return $this->mdef;
    }

    public function setMdef(int $mdef): self
    {
        $this->mdef = $mdef;

        return $this;
    }


}
