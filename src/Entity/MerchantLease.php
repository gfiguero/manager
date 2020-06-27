<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MerchantLease
 *
 * @ORM\Table(name="l2j_gs.merchant_lease")
 * @ORM\Entity
 */
class MerchantLease
{
    /**
     * @var int
     *
     * @ORM\Column(name="merchant_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $merchantId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="player_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $playerId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $type = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="player_name", type="string", length=35, nullable=true)
     */
    private $playerName;

    public function getMerchantId(): ?int
    {
        return $this->merchantId;
    }

    public function getPlayerId(): ?int
    {
        return $this->playerId;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function getBid(): ?int
    {
        return $this->bid;
    }

    public function setBid(?int $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    public function getPlayerName(): ?string
    {
        return $this->playerName;
    }

    public function setPlayerName(?string $playerName): self
    {
        $this->playerName = $playerName;

        return $this;
    }


}
