<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crests
 *
 * @ORM\Table(name="l2j_gs.crests")
 * @ORM\Entity
 */
class Crests
{
    /**
     * @var int
     *
     * @ORM\Column(name="crest_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $crestId = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="data", type="binary", length=2176, nullable=false)
     */
    private $data;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    public function getCrestId(): ?int
    {
        return $this->crestId;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }


}
