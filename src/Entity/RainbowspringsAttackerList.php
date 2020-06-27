<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RainbowspringsAttackerList
 *
 * @ORM\Table(name="l2j_gs.rainbowsprings_attacker_list", indexes={@ORM\Index(name="clanid", columns={"clanId"})})
 * @ORM\Entity
 */
class RainbowspringsAttackerList
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="clanId", type="integer", nullable=true)
     */
    private $clanid;

    /**
     * @var float|null
     *
     * @ORM\Column(name="war_decrees_count", type="float", precision=20, scale=0, nullable=true)
     */
    private $warDecreesCount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClanid(): ?int
    {
        return $this->clanid;
    }

    public function setClanid(?int $clanid): self
    {
        $this->clanid = $clanid;

        return $this;
    }

    public function getWarDecreesCount(): ?float
    {
        return $this->warDecreesCount;
    }

    public function setWarDecreesCount(?float $warDecreesCount): self
    {
        $this->warDecreesCount = $warDecreesCount;

        return $this;
    }


}
