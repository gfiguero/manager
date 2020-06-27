<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Castle
 *
 * @ORM\Table(name="l2j_gs.castle", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Castle
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     * @ORM\Id
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="0"})
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="taxPercent", type="integer", nullable=false, options={"default"="15"})
     */
    private $taxpercent = '15';

    /**
     * @var int
     *
     * @ORM\Column(name="treasury", type="bigint", nullable=false, options={"default"="0"})
     */
    private $treasury = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="siegeDate", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $siegedate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="regTimeOver", type="string", length=0, nullable=false, options={"default"="true"})
     */
    private $regtimeover = 'true';

    /**
     * @var int
     *
     * @ORM\Column(name="regTimeEnd", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $regtimeend = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="showNpcCrest", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $shownpccrest = 'false';

    /**
     * @var int
     *
     * @ORM\Column(name="ticketBuyCount", type="smallint", nullable=false, options={"default"="0"})
     */
    private $ticketbuycount = '0';

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTaxpercent(): ?int
    {
        return $this->taxpercent;
    }

    public function setTaxpercent(int $taxpercent): self
    {
        $this->taxpercent = $taxpercent;

        return $this;
    }

    public function getTreasury(): ?string
    {
        return $this->treasury;
    }

    public function setTreasury(string $treasury): self
    {
        $this->treasury = $treasury;

        return $this;
    }

    public function getSiegedate(): ?string
    {
        return $this->siegedate;
    }

    public function setSiegedate(string $siegedate): self
    {
        $this->siegedate = $siegedate;

        return $this;
    }

    public function getRegtimeover(): ?string
    {
        return $this->regtimeover;
    }

    public function setRegtimeover(string $regtimeover): self
    {
        $this->regtimeover = $regtimeover;

        return $this;
    }

    public function getRegtimeend(): ?string
    {
        return $this->regtimeend;
    }

    public function setRegtimeend(string $regtimeend): self
    {
        $this->regtimeend = $regtimeend;

        return $this;
    }

    public function getShownpccrest(): ?string
    {
        return $this->shownpccrest;
    }

    public function setShownpccrest(string $shownpccrest): self
    {
        $this->shownpccrest = $shownpccrest;

        return $this;
    }

    public function getTicketbuycount(): ?int
    {
        return $this->ticketbuycount;
    }

    public function setTicketbuycount(int $ticketbuycount): self
    {
        $this->ticketbuycount = $ticketbuycount;

        return $this;
    }


}
