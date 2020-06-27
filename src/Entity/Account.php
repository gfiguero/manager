<?php

namespace App\Entity;

use App\Repository\AccountRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Account
 *
 * @ORM\Table(name="l2j_ls.accounts")
 * @ORM\Entity(repositoryClass=AccountRepository::class)
 * @UniqueEntity(fields={"login"}, message="There is already an account with this login")
 */
class Account implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false, options={"default"=""}, unique=true)
     */
    private $login = '';

    /**
     * @ORM\Column(type="json", options={"default"="[]"})
     */
    private $roles = [];

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true, options={"default"=NULL})
     */
    private $password = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true, options={"default"=NULL})
     */
    private $email = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_time", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdTime;

    /**
     * @var int
     *
     * @ORM\Column(name="lastactive", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $lastactive = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="accessLevel", type="boolean", nullable=false, options={"default"="0"})
     */
    private $accesslevel = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastIP", type="string", length=15, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $lastip = NULL;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lastServer", type="boolean", nullable=true, options={"default"="1"})
     */
    private $lastserver = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pcIp", type="string", length=15, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $pcip = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hop1", type="string", length=15, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $hop1 = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hop2", type="string", length=15, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $hop2 = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hop3", type="string", length=15, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $hop3 = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hop4", type="string", length=15, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $hop4 = NULL;

    /**
     * @ORM\Column(type="boolean", options={"default"=false})
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="account")
     */
    private $orders;

    public function __construct()
    {
        $this->created_time = new DateTime();
        $this->orders = new ArrayCollection(); 
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedTime(): ?\DateTimeInterface
    {
        return $this->createdTime;
    }

    public function setCreatedTime(\DateTimeInterface $createdTime): self
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    public function getLastactive(): ?string
    {
        return $this->lastactive;
    }

    public function setLastactive(string $lastactive): self
    {
        $this->lastactive = $lastactive;

        return $this;
    }

    public function getAccesslevel(): ?bool
    {
        return $this->accesslevel;
    }

    public function setAccesslevel(bool $accesslevel): self
    {
        $this->accesslevel = $accesslevel;

        return $this;
    }

    public function getLastip(): ?string
    {
        return $this->lastip;
    }

    public function setLastip(?string $lastip): self
    {
        $this->lastip = $lastip;

        return $this;
    }

    public function getLastserver(): ?bool
    {
        return $this->lastserver;
    }

    public function setLastserver(?bool $lastserver): self
    {
        $this->lastserver = $lastserver;

        return $this;
    }

    public function getPcip(): ?string
    {
        return $this->pcip;
    }

    public function setPcip(?string $pcip): self
    {
        $this->pcip = $pcip;

        return $this;
    }

    public function getHop1(): ?string
    {
        return $this->hop1;
    }

    public function setHop1(?string $hop1): self
    {
        $this->hop1 = $hop1;

        return $this;
    }

    public function getHop2(): ?string
    {
        return $this->hop2;
    }

    public function setHop2(?string $hop2): self
    {
        $this->hop2 = $hop2;

        return $this;
    }

    public function getHop3(): ?string
    {
        return $this->hop3;
    }

    public function setHop3(?string $hop3): self
    {
        $this->hop3 = $hop3;

        return $this;
    }

    public function getHop4(): ?string
    {
        return $this->hop4;
    }

    public function setHop4(?string $hop4): self
    {
        $this->hop4 = $hop4;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setAccount($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->contains($order)) {
            $this->orders->removeElement($order);
            // set the owning side to null (unless already changed)
            if ($order->getAccount() === $this) {
                $order->setAccount(null);
            }
        }

        return $this;
    }


}
