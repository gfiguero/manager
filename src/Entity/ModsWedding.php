<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModsWedding
 *
 * @ORM\Table(name="l2j_gs.mods_wedding", indexes={@ORM\Index(name="player1Id", columns={"player1Id"}), @ORM\Index(name="player2Id", columns={"player2Id"})})
 * @ORM\Entity
 */
class ModsWedding
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
     * @var int
     *
     * @ORM\Column(name="player1Id", type="integer", nullable=false, options={"default"="0"})
     */
    private $player1id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="player2Id", type="integer", nullable=false, options={"default"="0"})
     */
    private $player2id = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="married", type="string", length=5, nullable=true)
     */
    private $married;

    /**
     * @var string|null
     *
     * @ORM\Column(name="affianceDate", type="decimal", precision=20, scale=0, nullable=true, options={"default"="0"})
     */
    private $affiancedate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="weddingDate", type="decimal", precision=20, scale=0, nullable=true, options={"default"="0"})
     */
    private $weddingdate = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayer1id(): ?int
    {
        return $this->player1id;
    }

    public function setPlayer1id(int $player1id): self
    {
        $this->player1id = $player1id;

        return $this;
    }

    public function getPlayer2id(): ?int
    {
        return $this->player2id;
    }

    public function setPlayer2id(int $player2id): self
    {
        $this->player2id = $player2id;

        return $this;
    }

    public function getMarried(): ?string
    {
        return $this->married;
    }

    public function setMarried(?string $married): self
    {
        $this->married = $married;

        return $this;
    }

    public function getAffiancedate(): ?string
    {
        return $this->affiancedate;
    }

    public function setAffiancedate(?string $affiancedate): self
    {
        $this->affiancedate = $affiancedate;

        return $this;
    }

    public function getWeddingdate(): ?string
    {
        return $this->weddingdate;
    }

    public function setWeddingdate(?string $weddingdate): self
    {
        $this->weddingdate = $weddingdate;

        return $this;
    }


}
