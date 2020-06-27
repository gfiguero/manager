<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemAuction
 *
 * @ORM\Table(name="l2j_gs.item_auction")
 * @ORM\Entity
 */
class ItemAuction
{
    /**
     * @var int
     *
     * @ORM\Column(name="auctionId", type="integer", nullable=false)
     * @ORM\Id
     */
    private $auctionid;

    /**
     * @var int
     *
     * @ORM\Column(name="instanceId", type="integer", nullable=false)
     */
    private $instanceid;

    /**
     * @var int
     *
     * @ORM\Column(name="auctionItemId", type="integer", nullable=false)
     */
    private $auctionitemid;

    /**
     * @var int
     *
     * @ORM\Column(name="startingTime", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $startingtime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="endingTime", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $endingtime = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="auctionStateId", type="boolean", nullable=false)
     */
    private $auctionstateid;

    public function getAuctionid(): ?int
    {
        return $this->auctionid;
    }

    public function getInstanceid(): ?int
    {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid): self
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    public function getAuctionitemid(): ?int
    {
        return $this->auctionitemid;
    }

    public function setAuctionitemid(int $auctionitemid): self
    {
        $this->auctionitemid = $auctionitemid;

        return $this;
    }

    public function getStartingtime(): ?string
    {
        return $this->startingtime;
    }

    public function setStartingtime(string $startingtime): self
    {
        $this->startingtime = $startingtime;

        return $this;
    }

    public function getEndingtime(): ?string
    {
        return $this->endingtime;
    }

    public function setEndingtime(string $endingtime): self
    {
        $this->endingtime = $endingtime;

        return $this;
    }

    public function getAuctionstateid(): ?bool
    {
        return $this->auctionstateid;
    }

    public function setAuctionstateid(bool $auctionstateid): self
    {
        $this->auctionstateid = $auctionstateid;

        return $this;
    }


}
