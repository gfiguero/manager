<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BbsFavorites
 *
 * @ORM\Table(name="l2j_gs.bbs_favorites", uniqueConstraints={@ORM\UniqueConstraint(name="favId_playerId", columns={"favId", "playerId"})})
 * @ORM\Entity
 */
class BbsFavorites
{
    /**
     * @var int
     *
     * @ORM\Column(name="favId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $favid;

    /**
     * @var int
     *
     * @ORM\Column(name="playerId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $playerid;

    /**
     * @var string
     *
     * @ORM\Column(name="favTitle", type="string", length=50, nullable=false)
     */
    private $favtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="favBypass", type="string", length=127, nullable=false)
     */
    private $favbypass;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="favAddDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $favadddate = 'CURRENT_TIMESTAMP';

    public function getFavid(): ?int
    {
        return $this->favid;
    }

    public function getPlayerid(): ?int
    {
        return $this->playerid;
    }

    public function setPlayerid(int $playerid): self
    {
        $this->playerid = $playerid;

        return $this;
    }

    public function getFavtitle(): ?string
    {
        return $this->favtitle;
    }

    public function setFavtitle(string $favtitle): self
    {
        $this->favtitle = $favtitle;

        return $this;
    }

    public function getFavbypass(): ?string
    {
        return $this->favbypass;
    }

    public function setFavbypass(string $favbypass): self
    {
        $this->favbypass = $favbypass;

        return $this;
    }

    public function getFavadddate(): ?\DateTimeInterface
    {
        return $this->favadddate;
    }

    public function setFavadddate(\DateTimeInterface $favadddate): self
    {
        $this->favadddate = $favadddate;

        return $this;
    }


}
