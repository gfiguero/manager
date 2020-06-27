<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanWars
 *
 * @ORM\Table(name="l2j_gs.clan_wars", indexes={@ORM\Index(name="clan1", columns={"clan1"}), @ORM\Index(name="clan2", columns={"clan2"})})
 * @ORM\Entity
 */
class ClanWars
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
     * @var string
     *
     * @ORM\Column(name="clan1", type="string", length=35, nullable=false, options={"default"=""})
     */
    private $clan1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clan2", type="string", length=35, nullable=false, options={"default"=""})
     */
    private $clan2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wantspeace1", type="decimal", precision=1, scale=0, nullable=false, options={"default"="0"})
     */
    private $wantspeace1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="wantspeace2", type="decimal", precision=1, scale=0, nullable=false, options={"default"="0"})
     */
    private $wantspeace2 = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClan1(): ?string
    {
        return $this->clan1;
    }

    public function setClan1(string $clan1): self
    {
        $this->clan1 = $clan1;

        return $this;
    }

    public function getClan2(): ?string
    {
        return $this->clan2;
    }

    public function setClan2(string $clan2): self
    {
        $this->clan2 = $clan2;

        return $this;
    }

    public function getWantspeace1(): ?string
    {
        return $this->wantspeace1;
    }

    public function setWantspeace1(string $wantspeace1): self
    {
        $this->wantspeace1 = $wantspeace1;

        return $this;
    }

    public function getWantspeace2(): ?string
    {
        return $this->wantspeace2;
    }

    public function setWantspeace2(string $wantspeace2): self
    {
        $this->wantspeace2 = $wantspeace2;

        return $this;
    }


}
