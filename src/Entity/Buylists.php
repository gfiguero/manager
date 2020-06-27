<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buylists
 *
 * @ORM\Table(name="l2j_gs.buylists")
 * @ORM\Entity
 */
class Buylists
{
    /**
     * @var int
     *
     * @ORM\Column(name="buylist_id", type="integer", nullable=false, options={"default"="0", "unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $buylistId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false, options={"default"="0", "unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="bigint", nullable=false, options={"default"="0", "unsigned"=true})
     */
    private $count = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="next_restock_time", type="bigint", nullable=false, options={"default"="0", "unsigned"=true})
     */
    private $nextRestockTime = '0';

    public function getBuylistId(): ?int
    {
        return $this->buylistId;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getCount(): ?string
    {
        return $this->count;
    }

    public function setCount(string $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getNextRestockTime(): ?string
    {
        return $this->nextRestockTime;
    }

    public function setNextRestockTime(string $nextRestockTime): self
    {
        $this->nextRestockTime = $nextRestockTime;

        return $this;
    }


}
