<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanPrivs
 *
 * @ORM\Table(name="l2j_gs.clan_privs")
 * @ORM\Entity
 */
class ClanPrivs
{
    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $clanId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rank = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="party", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $party = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="privs", type="integer", nullable=false, options={"default"="0"})
     */
    private $privs = '0';

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function getParty(): ?int
    {
        return $this->party;
    }

    public function getPrivs(): ?int
    {
        return $this->privs;
    }

    public function setPrivs(int $privs): self
    {
        $this->privs = $privs;

        return $this;
    }


}
