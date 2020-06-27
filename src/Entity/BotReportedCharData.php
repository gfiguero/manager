<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotReportedCharData
 *
 * @ORM\Table(name="l2j_gs.bot_reported_char_data")
 * @ORM\Entity
 */
class BotReportedCharData
{
    /**
     * @var int
     *
     * @ORM\Column(name="botId", type="integer", nullable=false, options={"default"="0", "unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $botid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reporterId", type="integer", nullable=false, options={"default"="0", "unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reporterid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reportDate", type="bigint", nullable=false, options={"default"="0", "unsigned"=true})
     */
    private $reportdate = '0';

    public function getBotid(): ?int
    {
        return $this->botid;
    }

    public function getReporterid(): ?int
    {
        return $this->reporterid;
    }

    public function getReportdate(): ?string
    {
        return $this->reportdate;
    }

    public function setReportdate(string $reportdate): self
    {
        $this->reportdate = $reportdate;

        return $this;
    }


}
