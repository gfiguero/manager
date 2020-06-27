<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlympiadNoblesEom
 *
 * @ORM\Table(name="l2j_gs.olympiad_nobles_eom")
 * @ORM\Entity
 */
class OlympiadNoblesEom
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="class_id", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $classId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="olympiad_points", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $olympiadPoints = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="competitions_done", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $competitionsDone = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="competitions_won", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $competitionsWon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="competitions_lost", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $competitionsLost = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="competitions_drawn", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $competitionsDrawn = '0';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getClassId(): ?bool
    {
        return $this->classId;
    }

    public function setClassId(bool $classId): self
    {
        $this->classId = $classId;

        return $this;
    }

    public function getOlympiadPoints(): ?int
    {
        return $this->olympiadPoints;
    }

    public function setOlympiadPoints(int $olympiadPoints): self
    {
        $this->olympiadPoints = $olympiadPoints;

        return $this;
    }

    public function getCompetitionsDone(): ?int
    {
        return $this->competitionsDone;
    }

    public function setCompetitionsDone(int $competitionsDone): self
    {
        $this->competitionsDone = $competitionsDone;

        return $this;
    }

    public function getCompetitionsWon(): ?int
    {
        return $this->competitionsWon;
    }

    public function setCompetitionsWon(int $competitionsWon): self
    {
        $this->competitionsWon = $competitionsWon;

        return $this;
    }

    public function getCompetitionsLost(): ?int
    {
        return $this->competitionsLost;
    }

    public function setCompetitionsLost(int $competitionsLost): self
    {
        $this->competitionsLost = $competitionsLost;

        return $this;
    }

    public function getCompetitionsDrawn(): ?int
    {
        return $this->competitionsDrawn;
    }

    public function setCompetitionsDrawn(int $competitionsDrawn): self
    {
        $this->competitionsDrawn = $competitionsDrawn;

        return $this;
    }


}
