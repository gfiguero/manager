<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuctionBid
 *
 * @ORM\Table(name="l2j_gs.auction_bid", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class AuctionBid
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default" = 0})
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="auctionId", type="integer", nullable=false, options={"default" = 0})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $auctionid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bidderId", type="integer", nullable=false, options={"default" = 0})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bidderid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bidderName", type="string", length=50, nullable=false)
     */
    private $biddername;

    /**
     * @var string
     *
     * @ORM\Column(name="clan_name", type="string", length=50, nullable=false)
     */
    private $clanName;

    /**
     * @var int
     *
     * @ORM\Column(name="maxBid", type="bigint", nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $maxbid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="time_bid", type="bigint", nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $timeBid = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getAuctionid(): ?int
    {
        return $this->auctionid;
    }

    public function getBidderid(): ?int
    {
        return $this->bidderid;
    }

    public function getBiddername(): ?string
    {
        return $this->biddername;
    }

    public function setBiddername(string $biddername): self
    {
        $this->biddername = $biddername;

        return $this;
    }

    public function getClanName(): ?string
    {
        return $this->clanName;
    }

    public function setClanName(string $clanName): self
    {
        $this->clanName = $clanName;

        return $this;
    }

    public function getMaxbid(): ?string
    {
        return $this->maxbid;
    }

    public function setMaxbid(string $maxbid): self
    {
        $this->maxbid = $maxbid;

        return $this;
    }

    public function getTimeBid(): ?string
    {
        return $this->timeBid;
    }

    public function setTimeBid(string $timeBid): self
    {
        $this->timeBid = $timeBid;

        return $this;
    }


}
