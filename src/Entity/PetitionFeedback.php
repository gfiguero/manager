<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetitionFeedback
 *
 * @ORM\Table(name="l2j_gs.petition_feedback")
 * @ORM\Entity
 */
class PetitionFeedback
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="charName", type="string", length=35, nullable=false)
     */
    private $charname;

    /**
     * @var string
     *
     * @ORM\Column(name="gmName", type="string", length=35, nullable=false)
     */
    private $gmname;

    /**
     * @var bool
     *
     * @ORM\Column(name="rate", type="boolean", nullable=false, options={"unsigned"=true, "default"="2"})
     */
    private $rate = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="date", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $date = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharname(): ?string
    {
        return $this->charname;
    }

    public function setCharname(string $charname): self
    {
        $this->charname = $charname;

        return $this;
    }

    public function getGmname(): ?string
    {
        return $this->gmname;
    }

    public function setGmname(string $gmname): self
    {
        $this->gmname = $gmname;

        return $this;
    }

    public function getRate(): ?bool
    {
        return $this->rate;
    }

    public function setRate(bool $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }


}
