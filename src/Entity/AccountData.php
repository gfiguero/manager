<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountData
 *
 * @ORM\Table(name="l2j_ls.account_data")
 * @ORM\Entity
 */
class AccountData
{
    /**
     * @var string
     *
     * @ORM\Column(name="account_name", type="string", length=45, nullable=false, options={"default"=""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=20, nullable=false, options={"default"=""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $var = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


}
