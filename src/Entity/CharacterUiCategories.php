<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterUiCategories
 *
 * @ORM\Table(name="l2j_gs.character_ui_categories")
 * @ORM\Entity
 */
class CharacterUiCategories
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="catId", type="boolean", nullable=false)
     * @ORM\Id
     */
    private $catid;

    /**
     * @var bool
     *
     * @ORM\Column(name="order", type="boolean", nullable=false)
     * @ORM\Id
     */
    private $order;

    /**
     * @var int
     *
     * @ORM\Column(name="cmdId", type="integer", nullable=false, options={"default"="0"})
     */
    private $cmdid = '0';

    public function getOrder(): ?bool
    {
        return $this->order;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getCatid(): ?bool
    {
        return $this->catid;
    }

    public function getCmdid(): ?int
    {
        return $this->cmdid;
    }

    public function setCmdid(int $cmdid): self
    {
        $this->cmdid = $cmdid;

        return $this;
    }


}
