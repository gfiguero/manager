<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanhallFunctions
 *
 * @ORM\Table(name="l2j_gs.clanhall_functions")
 * @ORM\Entity
 */
class ClanhallFunctions
{
    /**
     * @var int
     *
     * @ORM\Column(name="hall_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hallId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lvl", type="integer", nullable=false, options={"default"="0"})
     */
    private $lvl = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lease", type="integer", nullable=false, options={"default"="0"})
     */
    private $lease = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=20, scale=0, nullable=false, options={"default"="0"})
     */
    private $rate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="endTime", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $endtime = '0';

    public function getHallId(): ?int
    {
        return $this->hallId;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function getLvl(): ?int
    {
        return $this->lvl;
    }

    public function setLvl(int $lvl): self
    {
        $this->lvl = $lvl;

        return $this;
    }

    public function getLease(): ?int
    {
        return $this->lease;
    }

    public function setLease(int $lease): self
    {
        $this->lease = $lease;

        return $this;
    }

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(string $rate): self
    {
        $this->rate = $rate;

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
