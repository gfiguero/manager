<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemAttributes
 *
 * @ORM\Table(name="l2j_gs.item_attributes")
 * @ORM\Entity
 */
class ItemAttributes
{
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
     * @ORM\Column(name="augAttributes", type="integer", nullable=false, options={"default"="-1"})
     */
    private $augattributes = '-1';

    public function getItemid(): ?int
    {
        return $this->itemid;
    }

    public function getAugattributes(): ?int
    {
        return $this->augattributes;
    }

    public function setAugattributes(int $augattributes): self
    {
        $this->augattributes = $augattributes;

        return $this;
    }


}
