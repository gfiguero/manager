<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auction
 *
 * @ORM\Table(name="l2j_gs.auction", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Auction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="0"})
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sellerId", type="integer", nullable=false, options={"default"="0"})
     */
    private $sellerid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sellerName", type="string", length=50, nullable=false, options={"default"="NPC"})
     */
    private $sellername = 'NPC';

    /**
     * @var string
     *
     * @ORM\Column(name="sellerClanName", type="string", length=50, nullable=false, options={"default"=""})
     */
    private $sellerclanname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="itemType", type="string", length=25, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $itemtype = '';

    /**
     * @var int
     *
     * @ORM\Column(name="itemId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $itemid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="itemObjectId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $itemobjectid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemName", type="string", length=40, nullable=false, options={"default"=""})
     */
    private $itemname = '';

    /**
     * @var int
     *
     * @ORM\Column(name="itemQuantity", type="bigint", nullable=false, options={"default"="0", "unsigned"=true})
     */
    private $itemquantity = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="startingBid", type="bigint", nullable=false, options={"default"="0", "unsigned"=true})
     */
    private $startingbid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="currentBid", type="bigint", nullable=false, options={"default"="0", "unsigned"=true})
     */
    private $currentbid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="endDate", type="bigint", nullable=false, options={"default"="0", "unsigned"=true})
     */
    private $enddate = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSellerid(): ?int
    {
        return $this->sellerid;
    }

    public function setSellerid(int $sellerid): self
    {
        $this->sellerid = $sellerid;

        return $this;
    }

    public function getSellername(): ?string
    {
        return $this->sellername;
    }

    public function setSellername(string $sellername): self
    {
        $this->sellername = $sellername;

        return $this;
    }

    public function getSellerclanname(): ?string
    {
        return $this->sellerclanname;
    }

    public function setSellerclanname(string $sellerclanname): self
    {
        $this->sellerclanname = $sellerclanname;

        return $this;
    }

    public function getItemtype(): ?string
    {
        return $this->itemtype;
    }

    public function getItemid(): ?int
    {
        return $this->itemid;
    }

    public function getItemobjectid(): ?int
    {
        return $this->itemobjectid;
    }

    public function getItemname(): ?string
    {
        return $this->itemname;
    }

    public function setItemname(string $itemname): self
    {
        $this->itemname = $itemname;

        return $this;
    }

    public function getItemquantity(): ?string
    {
        return $this->itemquantity;
    }

    public function setItemquantity(string $itemquantity): self
    {
        $this->itemquantity = $itemquantity;

        return $this;
    }

    public function getStartingbid(): ?string
    {
        return $this->startingbid;
    }

    public function setStartingbid(string $startingbid): self
    {
        $this->startingbid = $startingbid;

        return $this;
    }

    public function getCurrentbid(): ?string
    {
        return $this->currentbid;
    }

    public function setCurrentbid(string $currentbid): self
    {
        $this->currentbid = $currentbid;

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


}
