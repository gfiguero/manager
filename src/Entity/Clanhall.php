<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clanhall
 *
 * @ORM\Table(name="l2j_gs.clanhall", indexes={@ORM\Index(name="ownerId", columns={"ownerId"})})
 * @ORM\Entity
 */
class Clanhall
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
     * @ORM\Column(name="name", type="string", length=40, nullable=false, options={"default"=""})
     */
    private $name = '';

    /**
     * @var int
     *
     * @ORM\Column(name="ownerId", type="integer", nullable=false, options={"default"="0"})
     */
    private $ownerid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lease", type="integer", nullable=false, options={"default"="0"})
     */
    private $lease = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=65535, nullable=false)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=15, nullable=false, options={"default"=""})
     */
    private $location = '';

    /**
     * @var int
     *
     * @ORM\Column(name="paidUntil", type="bigint", nullable=false, options={"unsigned"=true}, options={"unsigned"=true, "default"="0"})
     */
    private $paiduntil = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Grade", type="decimal", precision=1, scale=0, nullable=false, options={"default"="0"})
     */
    private $grade = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="paid", type="integer", nullable=false, options={"default"="0"})
     */
    private $paid = '0';

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

    public function getOwnerid(): ?int
    {
        return $this->ownerid;
    }

    public function setOwnerid(int $ownerid): self
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    public function getLease(): ?int
    {
        return $this->lease;
    }

    public function setLease(int $lease): self
    {
        $this->lease = $lease;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPaiduntil(): ?string
    {
        return $this->paiduntil;
    }

    public function setPaiduntil(string $paiduntil): self
    {
        $this->paiduntil = $paiduntil;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getPaid(): ?int
    {
        return $this->paid;
    }

    public function setPaid(int $paid): self
    {
        $this->paid = $paid;

        return $this;
    }


}
