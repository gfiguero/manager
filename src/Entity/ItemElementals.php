<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemElementals
 *
 * @ORM\Table(name="l2j_gs.item_elementals")
 * @ORM\Entity
 */
class ItemElementals
{
    /**
     * @var int
     *
     * @ORM\Column(name="itemId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $itemid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="elemType", type="boolean", nullable=false, options={"default"="-1"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $elemtype = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="elemValue", type="integer", nullable=false, options={"default"="-1"})
     */
    private $elemvalue = '-1';

    public function getItemid(): ?int
    {
        return $this->itemid;
    }

    public function getElemtype(): ?bool
    {
        return $this->elemtype;
    }

    public function getElemvalue(): ?int
    {
        return $this->elemvalue;
    }

    public function setElemvalue(int $elemvalue): self
    {
        $this->elemvalue = $elemvalue;

        return $this;
    }


}
