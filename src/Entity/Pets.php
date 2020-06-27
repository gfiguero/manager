<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pets
 *
 * @ORM\Table(name="l2j_gs.pets", indexes={@ORM\Index(name="ownerId", columns={"ownerId"})})
 * @ORM\Entity
 */
class Pets
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_obj_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $itemObjId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=16, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $level;

    /**
     * @var int|null
     *
     * @ORM\Column(name="curHp", type="integer", nullable=true, options={"unsigned"=true, "default"="0"})
     */
    private $curhp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="curMp", type="integer", nullable=true, options={"unsigned"=true, "default"="0"})
     */
    private $curmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp", type="bigint", nullable=true, options={"unsigned"=true, "default"="0"})
     */
    private $exp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sp", type="integer", nullable=true, options={"unsigned"=true, "default"="0"})
     */
    private $sp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fed", type="integer", nullable=true, options={"unsigned"=true, "default"="0"})
     */
    private $fed = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ownerId", type="integer", nullable=false, options={"default"="0"})
     */
    private $ownerid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="restore", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $restore = 'false';

    public function getItemObjId(): ?int
    {
        return $this->itemObjId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getCurhp(): ?int
    {
        return $this->curhp;
    }

    public function setCurhp(?int $curhp): self
    {
        $this->curhp = $curhp;

        return $this;
    }

    public function getCurmp(): ?int
    {
        return $this->curmp;
    }

    public function setCurmp(?int $curmp): self
    {
        $this->curmp = $curmp;

        return $this;
    }

    public function getExp(): ?string
    {
        return $this->exp;
    }

    public function setExp(?string $exp): self
    {
        $this->exp = $exp;

        return $this;
    }

    public function getSp(): ?int
    {
        return $this->sp;
    }

    public function setSp(?int $sp): self
    {
        $this->sp = $sp;

        return $this;
    }

    public function getFed(): ?int
    {
        return $this->fed;
    }

    public function setFed(?int $fed): self
    {
        $this->fed = $fed;

        return $this;
    }

    public function getOwnerid(): ?int
    {
        return $this->ownerid;
    }

    public function setOwnerid(int $ownerid): self
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    public function getRestore(): ?string
    {
        return $this->restore;
    }

    public function setRestore(string $restore): self
    {
        $this->restore = $restore;

        return $this;
    }


}
