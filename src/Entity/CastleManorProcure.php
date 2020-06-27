<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CastleManorProcure
 *
 * @ORM\Table(name="l2j_gs.castle_manor_procure")
 * @ORM\Entity
 */
class CastleManorProcure
{
    /**
     * @var bool
     *
     * @ORM\Column(name="castle_id", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $castleId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="crop_id", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cropId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="next_period", type="boolean", nullable=false, options={"unsigned"=true, "default"="1"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nextPeriod = true;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $amount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="start_amount", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $startAmount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $price = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="reward_type", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $rewardType = '0';

    public function getCastleId(): ?bool
    {
        return $this->castleId;
    }

    public function getCropId(): ?int
    {
        return $this->cropId;
    }

    public function getNextPeriod(): ?bool
    {
        return $this->nextPeriod;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStartAmount(): ?int
    {
        return $this->startAmount;
    }

    public function setStartAmount(int $startAmount): self
    {
        $this->startAmount = $startAmount;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getRewardType(): ?bool
    {
        return $this->rewardType;
    }

    public function setRewardType(bool $rewardType): self
    {
        $this->rewardType = $rewardType;

        return $this;
    }


}
