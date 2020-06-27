<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HerbDroplistGroups
 *
 * @ORM\Table(name="l2j_gs.herb_droplist_groups", indexes={@ORM\Index(name="key_mobId", columns={"groupId"})})
 * @ORM\Entity
 */
class HerbDroplistGroups
{
    /**
     * @var bool
     *
     * @ORM\Column(name="groupId", type="boolean", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $groupid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="itemId", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $itemid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="smallint", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $category = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="min", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $min = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="max", type="smallint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $max = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="chance", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $chance = '0';

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function getGroupid(): ?bool
    {
        return $this->groupid;
    }

    public function getItemid(): ?int
    {
        return $this->itemid;
    }

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getChance(): ?int
    {
        return $this->chance;
    }

    public function setChance(int $chance): self
    {
        $this->chance = $chance;

        return $this;
    }


}
