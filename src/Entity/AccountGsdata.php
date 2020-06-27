<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountGsdata
 *
 * @ORM\Table(name="l2j_gs.account_gsdata")
 * @ORM\Entity
 */
class AccountGsdata
{
    /**
     * @var string
     *
     * @ORM\Column(name="account_name", type="string", length=45, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $accountName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=255, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $var = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function getVar(): ?string
    {
        return $this->var;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
