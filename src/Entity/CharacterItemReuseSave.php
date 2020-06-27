<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterItemReuseSave
 *
 * @ORM\Table(name="l2j_gs.character_item_reuse_save")
 * @ORM\Entity
 */
class CharacterItemReuseSave
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

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
     * @ORM\Column(name="itemObjId", type="integer", nullable=false, options={"default"="1"})
     * @ORM\Id
     */
    private $itemobjid = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="reuseDelay", type="integer", nullable=false, options={"default"="0"})
     */
    private $reusedelay = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="systime", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $systime = '0';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getItemid(): ?int
    {
        return $this->itemid;
    }

    public function getItemobjid(): ?int
    {
        return $this->itemobjid;
    }

    public function getReusedelay(): ?int
    {
        return $this->reusedelay;
    }

    public function setReusedelay(int $reusedelay): self
    {
        $this->reusedelay = $reusedelay;

        return $this;
    }

    public function getSystime(): ?string
    {
        return $this->systime;
    }

    public function setSystime(string $systime): self
    {
        $this->systime = $systime;

        return $this;
    }


}
