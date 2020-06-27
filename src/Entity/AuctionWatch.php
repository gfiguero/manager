<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuctionWatch
 *
 * @ORM\Table(name="l2j_gs.auction_watch")
 * @ORM\Entity
 */
class AuctionWatch
{
    /**
     * @var int
     *
     * @ORM\Column(name="charObjId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $charobjid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="auctionId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $auctionid = '0';

    public function getCharobjid(): ?int
    {
        return $this->charobjid;
    }

    public function getAuctionid(): ?int
    {
        return $this->auctionid;
    }


}
