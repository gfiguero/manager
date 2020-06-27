<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountIpauth
 *
 * @ORM\Table(name="l2j_ls.accounts_ipauth")
 * @ORM\Entity
 */
class AccountIpauth
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
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false, options={"fixed"=true})
     */
    private $ip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=true, options={"default"="allow"})
     */
    private $type = 'allow';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }


}
