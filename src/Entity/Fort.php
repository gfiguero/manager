<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fort
 *
 * @ORM\Table(name="l2j_gs.fort", indexes={@ORM\Index(name="owner", columns={"owner"})})
 * @ORM\Entity
 */
class Fort
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="siegeDate", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $siegedate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lastOwnedTime", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $lastownedtime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="owner", type="integer", nullable=false, options={"default"="0"})
     */
    private $owner = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fortType", type="integer", nullable=false, options={"default"="0"})
     */
    private $forttype = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer", nullable=false, options={"default"="0"})
     */
    private $state = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="castleId", type="integer", nullable=false, options={"default"="0"})
     */
    private $castleid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="supplyLvL", type="integer", nullable=false, options={"default"="0"})
     */
    private $supplylvl = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getLastownedtime(): ?string
    {
        return $this->lastownedtime;
    }

    public function setLastownedtime(string $lastownedtime): self
    {
        $this->lastownedtime = $lastownedtime;

        return $this;
    }

    public function getOwner(): ?int
    {
        return $this->owner;
    }

    public function setOwner(int $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getForttype(): ?int
    {
        return $this->forttype;
    }

    public function setForttype(int $forttype): self
    {
        $this->forttype = $forttype;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCastleid(): ?int
    {
        return $this->castleid;
    }

    public function setCastleid(int $castleid): self
    {
        $this->castleid = $castleid;

        return $this;
    }

    public function getSupplylvl(): ?int
    {
        return $this->supplylvl;
    }

    public function setSupplylvl(int $supplylvl): self
    {
        $this->supplylvl = $supplylvl;

        return $this;
    }


}
