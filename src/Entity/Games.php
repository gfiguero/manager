<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Games
 *
 * @ORM\Table(name="l2j_gs.games")
 * @ORM\Entity
 */
class Games
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idnr", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idnr = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="number1", type="integer", nullable=false, options={"default"="0"})
     */
    private $number1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="number2", type="integer", nullable=false, options={"default"="0"})
     */
    private $number2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="prize", type="integer", nullable=false, options={"default"="0"})
     */
    private $prize = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="newprize", type="integer", nullable=false, options={"default"="0"})
     */
    private $newprize = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="prize1", type="integer", nullable=false, options={"default"="0"})
     */
    private $prize1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="prize2", type="integer", nullable=false, options={"default"="0"})
     */
    private $prize2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="prize3", type="integer", nullable=false, options={"default"="0"})
     */
    private $prize3 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="enddate", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $enddate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="finished", type="integer", nullable=false, options={"default"="0"})
     */
    private $finished = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdnr(): ?int
    {
        return $this->idnr;
    }

    public function getNumber1(): ?int
    {
        return $this->number1;
    }

    public function setNumber1(int $number1): self
    {
        $this->number1 = $number1;

        return $this;
    }

    public function getNumber2(): ?int
    {
        return $this->number2;
    }

    public function setNumber2(int $number2): self
    {
        $this->number2 = $number2;

        return $this;
    }

    public function getPrize(): ?int
    {
        return $this->prize;
    }

    public function setPrize(int $prize): self
    {
        $this->prize = $prize;

        return $this;
    }

    public function getNewprize(): ?int
    {
        return $this->newprize;
    }

    public function setNewprize(int $newprize): self
    {
        $this->newprize = $newprize;

        return $this;
    }

    public function getPrize1(): ?int
    {
        return $this->prize1;
    }

    public function setPrize1(int $prize1): self
    {
        $this->prize1 = $prize1;

        return $this;
    }

    public function getPrize2(): ?int
    {
        return $this->prize2;
    }

    public function setPrize2(int $prize2): self
    {
        $this->prize2 = $prize2;

        return $this;
    }

    public function getPrize3(): ?int
    {
        return $this->prize3;
    }

    public function setPrize3(int $prize3): self
    {
        $this->prize3 = $prize3;

        return $this;
    }

    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    public function setEnddate(string $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getFinished(): ?int
    {
        return $this->finished;
    }

    public function setFinished(int $finished): self
    {
        $this->finished = $finished;

        return $this;
    }


}
