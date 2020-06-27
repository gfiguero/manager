<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanSubpledges
 *
 * @ORM\Table(name="l2j_gs.clan_subpledges", indexes={@ORM\Index(name="leader_id", columns={"leader_id"})})
 * @ORM\Entity
 */
class ClanSubpledges
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
     * @ORM\Column(name="sub_pledge_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $subPledgeId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true, options={"default"=NULL})
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="leader_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $leaderId = '0';

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function getSubPledgeId(): ?int
    {
        return $this->subPledgeId;
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

    public function getLeaderId(): ?int
    {
        return $this->leaderId;
    }

    public function setLeaderId(int $leaderId): self
    {
        $this->leaderId = $leaderId;

        return $this;
    }


}
