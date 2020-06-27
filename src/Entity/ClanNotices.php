<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClanNotices
 *
 * @ORM\Table(name="l2j_gs.clan_notices")
 * @ORM\Entity
 */
class ClanNotices
{
    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $clanId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="enabled", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $enabled = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="text", length=65535, nullable=false)
     */
    private $notice;

    public function getClanId(): ?int
    {
        return $this->clanId;
    }

    public function getEnabled(): ?string
    {
        return $this->enabled;
    }

    public function setEnabled(string $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getNotice(): ?string
    {
        return $this->notice;
    }

    public function setNotice(string $notice): self
    {
        $this->notice = $notice;

        return $this;
    }


}
