<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CursedWeapons
 *
 * @ORM\Table(name="l2j_gs.cursed_weapons", indexes={@ORM\Index(name="charId", columns={"charId"})})
 * @ORM\Entity
 */
class CursedWeapons
{
    /**
     * @var int
     *
     * @ORM\Column(name="itemId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $itemid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $charid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="playerKarma", type="integer", nullable=true, options={"default"="0"})
     */
    private $playerkarma = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="playerPkKills", type="integer", nullable=true, options={"default"="0"})
     */
    private $playerpkkills = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbKills", type="integer", nullable=true, options={"default"="0"})
     */
    private $nbkills = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="endTime", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $endtime = '0';

    public function getItemid(): ?int
    {
        return $this->itemid;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function setCharid(int $charid): self
    {
        $this->charid = $charid;

        return $this;
    }

    public function getPlayerkarma(): ?int
    {
        return $this->playerkarma;
    }

    public function setPlayerkarma(?int $playerkarma): self
    {
        $this->playerkarma = $playerkarma;

        return $this;
    }

    public function getPlayerpkkills(): ?int
    {
        return $this->playerpkkills;
    }

    public function setPlayerpkkills(?int $playerpkkills): self
    {
        $this->playerpkkills = $playerpkkills;

        return $this;
    }

    public function getNbkills(): ?int
    {
        return $this->nbkills;
    }

    public function setNbkills(?int $nbkills): self
    {
        $this->nbkills = $nbkills;

        return $this;
    }

    public function getEndtime(): ?string
    {
        return $this->endtime;
    }

    public function setEndtime(string $endtime): self
    {
        $this->endtime = $endtime;

        return $this;
    }


}
