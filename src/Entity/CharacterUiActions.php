<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterUiActions
 *
 * @ORM\Table(name="l2j_gs.character_ui_actions")
 * @ORM\Entity
 */
class CharacterUiActions
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
     * @ORM\Column(name="cat", type="boolean", nullable=false)
     * @ORM\Id
     */
    private $cat;

    /**
     * @var int
     *
     * @ORM\Column(name="cmd", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $cmd = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="order", type="boolean", nullable=false)
     */
    private $order;

    /**
     * @var int
     *
     * @ORM\Column(name="key", type="integer", nullable=false)
     */
    private $key;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tgKey1", type="integer", nullable=true)
     */
    private $tgkey1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tgKey2", type="integer", nullable=true)
     */
    private $tgkey2;

    /**
     * @var bool
     *
     * @ORM\Column(name="show", type="boolean", nullable=false)
     */
    private $show;

    public function getCat(): ?bool
    {
        return $this->cat;
    }

    public function getCmd(): ?int
    {
        return $this->cmd;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getOrder(): ?bool
    {
        return $this->order;
    }

    public function setOrder(bool $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getKey(): ?int
    {
        return $this->key;
    }

    public function setKey(int $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getTgkey1(): ?int
    {
        return $this->tgkey1;
    }

    public function setTgkey1(?int $tgkey1): self
    {
        $this->tgkey1 = $tgkey1;

        return $this;
    }

    public function getTgkey2(): ?int
    {
        return $this->tgkey2;
    }

    public function setTgkey2(?int $tgkey2): self
    {
        $this->tgkey2 = $tgkey2;

        return $this;
    }

    public function getShow(): ?bool
    {
        return $this->show;
    }

    public function setShow(bool $show): self
    {
        $this->show = $show;

        return $this;
    }


}
