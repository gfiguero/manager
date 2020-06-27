<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gameservers
 *
 * @ORM\Table(name="l2j_ls.gameservers")
 * @ORM\Entity
 */
class Gameservers
{
    /**
     * @var int
     *
     * @ORM\Column(name="server_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $serverId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hexid", type="string", length=50, nullable=false, options={"default"=""})
     */
    private $hexid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=50, nullable=false, options={"default"=""})
     */
    private $host = '';


}
