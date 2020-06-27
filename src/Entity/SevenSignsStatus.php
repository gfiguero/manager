<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SevenSignsStatus
 *
 * @ORM\Table(name="l2j_gs.seven_signs_status")
 * @ORM\Entity
 */
class SevenSignsStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="current_cycle", type="integer", nullable=false, options={"default"="1"})
     */
    private $currentCycle = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="festival_cycle", type="integer", nullable=false, options={"default"="1"})
     */
    private $festivalCycle = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="active_period", type="integer", nullable=false, options={"default"="1"})
     */
    private $activePeriod = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="date", type="bigint", nullable=false, options={"unsigned"=true,"default"="0"})
     */
    private $date = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="previous_winner", type="integer", nullable=false, options={"default"="0"})
     */
    private $previousWinner = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dawn_stone_score", type="decimal", precision=20, scale=0, nullable=false, options={"default"="0"})
     */
    private $dawnStoneScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dawn_festival_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $dawnFestivalScore = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dusk_stone_score", type="decimal", precision=20, scale=0, nullable=false, options={"default"="0"})
     */
    private $duskStoneScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dusk_festival_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $duskFestivalScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="avarice_owner", type="integer", nullable=false, options={"default"="0"})
     */
    private $avariceOwner = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gnosis_owner", type="integer", nullable=false, options={"default"="0"})
     */
    private $gnosisOwner = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="strife_owner", type="integer", nullable=false, options={"default"="0"})
     */
    private $strifeOwner = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="avarice_dawn_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $avariceDawnScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gnosis_dawn_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $gnosisDawnScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="strife_dawn_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $strifeDawnScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="avarice_dusk_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $avariceDuskScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gnosis_dusk_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $gnosisDuskScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="strife_dusk_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $strifeDuskScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="accumulated_bonus0", type="integer", nullable=false, options={"default"="0"})
     */
    private $accumulatedBonus0 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="accumulated_bonus1", type="integer", nullable=false, options={"default"="0"})
     */
    private $accumulatedBonus1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="accumulated_bonus2", type="integer", nullable=false, options={"default"="0"})
     */
    private $accumulatedBonus2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="accumulated_bonus3", type="integer", nullable=false, options={"default"="0"})
     */
    private $accumulatedBonus3 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="accumulated_bonus4", type="integer", nullable=false, options={"default"="0"})
     */
    private $accumulatedBonus4 = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurrentCycle(): ?int
    {
        return $this->currentCycle;
    }

    public function setCurrentCycle(int $currentCycle): self
    {
        $this->currentCycle = $currentCycle;

        return $this;
    }

    public function getFestivalCycle(): ?int
    {
        return $this->festivalCycle;
    }

    public function setFestivalCycle(int $festivalCycle): self
    {
        $this->festivalCycle = $festivalCycle;

        return $this;
    }

    public function getActivePeriod(): ?int
    {
        return $this->activePeriod;
    }

    public function setActivePeriod(int $activePeriod): self
    {
        $this->activePeriod = $activePeriod;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPreviousWinner(): ?int
    {
        return $this->previousWinner;
    }

    public function setPreviousWinner(int $previousWinner): self
    {
        $this->previousWinner = $previousWinner;

        return $this;
    }

    public function getDawnStoneScore(): ?string
    {
        return $this->dawnStoneScore;
    }

    public function setDawnStoneScore(string $dawnStoneScore): self
    {
        $this->dawnStoneScore = $dawnStoneScore;

        return $this;
    }

    public function getDawnFestivalScore(): ?int
    {
        return $this->dawnFestivalScore;
    }

    public function setDawnFestivalScore(int $dawnFestivalScore): self
    {
        $this->dawnFestivalScore = $dawnFestivalScore;

        return $this;
    }

    public function getDuskStoneScore(): ?string
    {
        return $this->duskStoneScore;
    }

    public function setDuskStoneScore(string $duskStoneScore): self
    {
        $this->duskStoneScore = $duskStoneScore;

        return $this;
    }

    public function getDuskFestivalScore(): ?int
    {
        return $this->duskFestivalScore;
    }

    public function setDuskFestivalScore(int $duskFestivalScore): self
    {
        $this->duskFestivalScore = $duskFestivalScore;

        return $this;
    }

    public function getAvariceOwner(): ?int
    {
        return $this->avariceOwner;
    }

    public function setAvariceOwner(int $avariceOwner): self
    {
        $this->avariceOwner = $avariceOwner;

        return $this;
    }

    public function getGnosisOwner(): ?int
    {
        return $this->gnosisOwner;
    }

    public function setGnosisOwner(int $gnosisOwner): self
    {
        $this->gnosisOwner = $gnosisOwner;

        return $this;
    }

    public function getStrifeOwner(): ?int
    {
        return $this->strifeOwner;
    }

    public function setStrifeOwner(int $strifeOwner): self
    {
        $this->strifeOwner = $strifeOwner;

        return $this;
    }

    public function getAvariceDawnScore(): ?int
    {
        return $this->avariceDawnScore;
    }

    public function setAvariceDawnScore(int $avariceDawnScore): self
    {
        $this->avariceDawnScore = $avariceDawnScore;

        return $this;
    }

    public function getGnosisDawnScore(): ?int
    {
        return $this->gnosisDawnScore;
    }

    public function setGnosisDawnScore(int $gnosisDawnScore): self
    {
        $this->gnosisDawnScore = $gnosisDawnScore;

        return $this;
    }

    public function getStrifeDawnScore(): ?int
    {
        return $this->strifeDawnScore;
    }

    public function setStrifeDawnScore(int $strifeDawnScore): self
    {
        $this->strifeDawnScore = $strifeDawnScore;

        return $this;
    }

    public function getAvariceDuskScore(): ?int
    {
        return $this->avariceDuskScore;
    }

    public function setAvariceDuskScore(int $avariceDuskScore): self
    {
        $this->avariceDuskScore = $avariceDuskScore;

        return $this;
    }

    public function getGnosisDuskScore(): ?int
    {
        return $this->gnosisDuskScore;
    }

    public function setGnosisDuskScore(int $gnosisDuskScore): self
    {
        $this->gnosisDuskScore = $gnosisDuskScore;

        return $this;
    }

    public function getStrifeDuskScore(): ?int
    {
        return $this->strifeDuskScore;
    }

    public function setStrifeDuskScore(int $strifeDuskScore): self
    {
        $this->strifeDuskScore = $strifeDuskScore;

        return $this;
    }

    public function getAccumulatedBonus0(): ?int
    {
        return $this->accumulatedBonus0;
    }

    public function setAccumulatedBonus0(int $accumulatedBonus0): self
    {
        $this->accumulatedBonus0 = $accumulatedBonus0;

        return $this;
    }

    public function getAccumulatedBonus1(): ?int
    {
        return $this->accumulatedBonus1;
    }

    public function setAccumulatedBonus1(int $accumulatedBonus1): self
    {
        $this->accumulatedBonus1 = $accumulatedBonus1;

        return $this;
    }

    public function getAccumulatedBonus2(): ?int
    {
        return $this->accumulatedBonus2;
    }

    public function setAccumulatedBonus2(int $accumulatedBonus2): self
    {
        $this->accumulatedBonus2 = $accumulatedBonus2;

        return $this;
    }

    public function getAccumulatedBonus3(): ?int
    {
        return $this->accumulatedBonus3;
    }

    public function setAccumulatedBonus3(int $accumulatedBonus3): self
    {
        $this->accumulatedBonus3 = $accumulatedBonus3;

        return $this;
    }

    public function getAccumulatedBonus4(): ?int
    {
        return $this->accumulatedBonus4;
    }

    public function setAccumulatedBonus4(int $accumulatedBonus4): self
    {
        $this->accumulatedBonus4 = $accumulatedBonus4;

        return $this;
    }


}
