<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SevenSigns
 *
 * @ORM\Table(name="l2j_gs.seven_signs")
 * @ORM\Entity
 */
class SevenSigns
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cabal", type="string", length=4, nullable=false, options={"default"=""})
     */
    private $cabal = '';

    /**
     * @var int
     *
     * @ORM\Column(name="seal", type="integer", nullable=false, options={"default"="0"})
     */
    private $seal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="red_stones", type="integer", nullable=false, options={"default"="0"})
     */
    private $redStones = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="green_stones", type="integer", nullable=false, options={"default"="0"})
     */
    private $greenStones = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="blue_stones", type="integer", nullable=false, options={"default"="0"})
     */
    private $blueStones = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ancient_adena_amount", type="decimal", precision=20, scale=0, nullable=false, options={"default"="0"})
     */
    private $ancientAdenaAmount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="contribution_score", type="decimal", precision=20, scale=0, nullable=false, options={"default"="0"})
     */
    private $contributionScore = '0';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getCabal(): ?string
    {
        return $this->cabal;
    }

    public function setCabal(string $cabal): self
    {
        $this->cabal = $cabal;

        return $this;
    }

    public function getSeal(): ?int
    {
        return $this->seal;
    }

    public function setSeal(int $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getRedStones(): ?int
    {
        return $this->redStones;
    }

    public function setRedStones(int $redStones): self
    {
        $this->redStones = $redStones;

        return $this;
    }

    public function getGreenStones(): ?int
    {
        return $this->greenStones;
    }

    public function setGreenStones(int $greenStones): self
    {
        $this->greenStones = $greenStones;

        return $this;
    }

    public function getBlueStones(): ?int
    {
        return $this->blueStones;
    }

    public function setBlueStones(int $blueStones): self
    {
        $this->blueStones = $blueStones;

        return $this;
    }

    public function getAncientAdenaAmount(): ?string
    {
        return $this->ancientAdenaAmount;
    }

    public function setAncientAdenaAmount(string $ancientAdenaAmount): self
    {
        $this->ancientAdenaAmount = $ancientAdenaAmount;

        return $this;
    }

    public function getContributionScore(): ?string
    {
        return $this->contributionScore;
    }

    public function setContributionScore(string $contributionScore): self
    {
        $this->contributionScore = $contributionScore;

        return $this;
    }


}
