<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanData
 *
 * @ORM\Table(name="l2j_gs.clan_data", indexes={@ORM\Index(name="ally_id", columns={"ally_id"}), @ORM\Index(name="leader_id", columns={"leader_id"}), @ORM\Index(name="auction_bid_at", columns={"auction_bid_at"})})
 * @ORM\Entity
 */
class ClanData
{
    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $clanId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="clan_name", type="string", length=45, nullable=true)
     */
    private $clanName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="clan_level", type="integer", nullable=true)
     */
    private $clanLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="reputation_score", type="integer", nullable=false, options={"default"="0"})
     */
    private $reputationScore = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="hasCastle", type="integer", nullable=true)
     */
    private $hascastle;

    /**
     * @var int
     *
     * @ORM\Column(name="blood_alliance_count", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $bloodAllianceCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="blood_oath_count", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $bloodOathCount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ally_id", type="integer", nullable=true)
     */
    private $allyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ally_name", type="string", length=45, nullable=true)
     */
    private $allyName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="leader_id", type="integer", nullable=true)
     */
    private $leaderId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="crest_id", type="integer", nullable=true)
     */
    private $crestId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="crest_large_id", type="integer", nullable=true)
     */
    private $crestLargeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ally_crest_id", type="integer", nullable=true)
     */
    private $allyCrestId;

    /**
     * @var int
     *
     * @ORM\Column(name="auction_bid_at", type="integer", nullable=false, options={"default"="0"})
     */
    private $auctionBidAt = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ally_penalty_expiry_time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $allyPenaltyExpiryTime = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ally_penalty_type", type="boolean", nullable=false, options={"default"="0"})
     */
    private $allyPenaltyType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="char_penalty_expiry_time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $charPenaltyExpiryTime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dissolving_expiry_time", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $dissolvingExpiryTime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="new_leader_id", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $newLeaderId = '0';

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function getClanName(): ?string
    {
        return $this->clanName;
    }

    public function setClanName(?string $clanName): self
    {
        $this->clanName = $clanName;

        return $this;
    }

    public function getClanLevel(): ?int
    {
        return $this->clanLevel;
    }

    public function setClanLevel(?int $clanLevel): self
    {
        $this->clanLevel = $clanLevel;

        return $this;
    }

    public function getReputationScore(): ?int
    {
        return $this->reputationScore;
    }

    public function setReputationScore(int $reputationScore): self
    {
        $this->reputationScore = $reputationScore;

        return $this;
    }

    public function getHascastle(): ?int
    {
        return $this->hascastle;
    }

    public function setHascastle(?int $hascastle): self
    {
        $this->hascastle = $hascastle;

        return $this;
    }

    public function getBloodAllianceCount(): ?int
    {
        return $this->bloodAllianceCount;
    }

    public function setBloodAllianceCount(int $bloodAllianceCount): self
    {
        $this->bloodAllianceCount = $bloodAllianceCount;

        return $this;
    }

    public function getBloodOathCount(): ?int
    {
        return $this->bloodOathCount;
    }

    public function setBloodOathCount(int $bloodOathCount): self
    {
        $this->bloodOathCount = $bloodOathCount;

        return $this;
    }

    public function getAllyId(): ?int
    {
        return $this->allyId;
    }

    public function setAllyId(?int $allyId): self
    {
        $this->allyId = $allyId;

        return $this;
    }

    public function getAllyName(): ?string
    {
        return $this->allyName;
    }

    public function setAllyName(?string $allyName): self
    {
        $this->allyName = $allyName;

        return $this;
    }

    public function getLeaderId(): ?int
    {
        return $this->leaderId;
    }

    public function setLeaderId(?int $leaderId): self
    {
        $this->leaderId = $leaderId;

        return $this;
    }

    public function getCrestId(): ?int
    {
        return $this->crestId;
    }

    public function setCrestId(?int $crestId): self
    {
        $this->crestId = $crestId;

        return $this;
    }

    public function getCrestLargeId(): ?int
    {
        return $this->crestLargeId;
    }

    public function setCrestLargeId(?int $crestLargeId): self
    {
        $this->crestLargeId = $crestLargeId;

        return $this;
    }

    public function getAllyCrestId(): ?int
    {
        return $this->allyCrestId;
    }

    public function setAllyCrestId(?int $allyCrestId): self
    {
        $this->allyCrestId = $allyCrestId;

        return $this;
    }

    public function getAuctionBidAt(): ?int
    {
        return $this->auctionBidAt;
    }

    public function setAuctionBidAt(int $auctionBidAt): self
    {
        $this->auctionBidAt = $auctionBidAt;

        return $this;
    }

    public function getAllyPenaltyExpiryTime(): ?string
    {
        return $this->allyPenaltyExpiryTime;
    }

    public function setAllyPenaltyExpiryTime(string $allyPenaltyExpiryTime): self
    {
        $this->allyPenaltyExpiryTime = $allyPenaltyExpiryTime;

        return $this;
    }

    public function getAllyPenaltyType(): ?bool
    {
        return $this->allyPenaltyType;
    }

    public function setAllyPenaltyType(bool $allyPenaltyType): self
    {
        $this->allyPenaltyType = $allyPenaltyType;

        return $this;
    }

    public function getCharPenaltyExpiryTime(): ?string
    {
        return $this->charPenaltyExpiryTime;
    }

    public function setCharPenaltyExpiryTime(string $charPenaltyExpiryTime): self
    {
        $this->charPenaltyExpiryTime = $charPenaltyExpiryTime;

        return $this;
    }

    public function getDissolvingExpiryTime(): ?string
    {
        return $this->dissolvingExpiryTime;
    }

    public function setDissolvingExpiryTime(string $dissolvingExpiryTime): self
    {
        $this->dissolvingExpiryTime = $dissolvingExpiryTime;

        return $this;
    }

    public function getNewLeaderId(): ?int
    {
        return $this->newLeaderId;
    }

    public function setNewLeaderId(int $newLeaderId): self
    {
        $this->newLeaderId = $newLeaderId;

        return $this;
    }


}
