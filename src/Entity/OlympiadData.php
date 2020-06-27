<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlympiadData
 *
 * @ORM\Table(name="l2j_gs.olympiad_data")
 * @ORM\Entity
 */
class OlympiadData
{
    /**
     * @var bool
     *
     * @ORM\Column(name="id", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="current_cycle", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $currentCycle = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="period", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $period = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="olympiad_end", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $olympiadEnd = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="validation_end", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $validationEnd = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="next_weekly_change", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $nextWeeklyChange = '0';

    public function getId(): ?bool
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

    public function getPeriod(): ?int
    {
        return $this->period;
    }

    public function setPeriod(int $period): self
    {
        $this->period = $period;

        return $this;
    }

    public function getOlympiadEnd(): ?string
    {
        return $this->olympiadEnd;
    }

    public function setOlympiadEnd(string $olympiadEnd): self
    {
        $this->olympiadEnd = $olympiadEnd;

        return $this;
    }

    public function getValidationEnd(): ?string
    {
        return $this->validationEnd;
    }

    public function setValidationEnd(string $validationEnd): self
    {
        $this->validationEnd = $validationEnd;

        return $this;
    }

    public function getNextWeeklyChange(): ?string
    {
        return $this->nextWeeklyChange;
    }

    public function setNextWeeklyChange(string $nextWeeklyChange): self
    {
        $this->nextWeeklyChange = $nextWeeklyChange;

        return $this;
    }


}
