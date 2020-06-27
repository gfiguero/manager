<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FortsiegeClans
 *
 * @ORM\Table(name="l2j_gs.fortsiege_clans")
 * @ORM\Entity
 */
class FortsiegeClans
{
    /**
     * @var int
     *
     * @ORM\Column(name="clan_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $clanId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fort_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $fortId = '0';

    public function getFortId(): ?int
    {
        return $this->fortId;
    }

    public function getClanId(): ?int
    {
        return $this->clanId;
    }


}
