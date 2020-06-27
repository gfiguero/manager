<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemAuctionBid
 *
 * @ORM\Table(name="l2j_gs.item_auction_bid")
 * @ORM\Entity
 */
class ItemAuctionBid
{
    /**
     * @var int
     *
     * @ORM\Column(name="auctionId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $auctionid;

    /**
     * @var int
     *
     * @ORM\Column(name="playerObjId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $playerobjid;

    /**
     * @var int
     *
     * @ORM\Column(name="playerBid", type="bigint", nullable=false)
     */
    private $playerbid;

    public function getAuctionid(): ?int
    {
        return $this->auctionid;
    }

    public function getPlayerobjid(): ?int
    {
        return $this->playerobjid;
    }

    public function getPlayerbid(): ?string
    {
        return $this->playerbid;
    }

    public function setPlayerbid(string $playerbid): self
    {
        $this->playerbid = $playerbid;

        return $this;
    }


}
