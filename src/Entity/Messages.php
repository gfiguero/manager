<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="l2j_gs.messages")
 * @ORM\Entity
 */
class Messages
{
    /**
     * @var int
     *
     * @ORM\Column(name="messageId", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $messageid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="senderId", type="integer", nullable=false, options={"default"="0"})
     */
    private $senderid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="receiverId", type="integer", nullable=false, options={"default"="0"})
     */
    private $receiverid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="text", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="expiration", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $expiration = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reqAdena", type="bigint", nullable=false, options={"default"="0"})
     */
    private $reqadena = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hasAttachments", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $hasattachments = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="isUnread", type="string", length=0, nullable=false, options={"default"="true"})
     */
    private $isunread = 'true';

    /**
     * @var string
     *
     * @ORM\Column(name="isDeletedBySender", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $isdeletedbysender = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="isDeletedByReceiver", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $isdeletedbyreceiver = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="isLocked", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $islocked = 'false';

    /**
     * @var bool
     *
     * @ORM\Column(name="sendBySystem", type="boolean", nullable=false, options={"default"="0"})
     */
    private $sendbysystem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="isReturned", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $isreturned = 'false';

    public function getMessageid(): ?int
    {
        return $this->messageid;
    }

    public function getSenderid(): ?int
    {
        return $this->senderid;
    }

    public function setSenderid(int $senderid): self
    {
        $this->senderid = $senderid;

        return $this;
    }

    public function getReceiverid(): ?int
    {
        return $this->receiverid;
    }

    public function setReceiverid(int $receiverid): self
    {
        $this->receiverid = $receiverid;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    public function setExpiration(string $expiration): self
    {
        $this->expiration = $expiration;

        return $this;
    }

    public function getReqadena(): ?string
    {
        return $this->reqadena;
    }

    public function setReqadena(string $reqadena): self
    {
        $this->reqadena = $reqadena;

        return $this;
    }

    public function getHasattachments(): ?string
    {
        return $this->hasattachments;
    }

    public function setHasattachments(string $hasattachments): self
    {
        $this->hasattachments = $hasattachments;

        return $this;
    }

    public function getIsunread(): ?string
    {
        return $this->isunread;
    }

    public function setIsunread(string $isunread): self
    {
        $this->isunread = $isunread;

        return $this;
    }

    public function getIsdeletedbysender(): ?string
    {
        return $this->isdeletedbysender;
    }

    public function setIsdeletedbysender(string $isdeletedbysender): self
    {
        $this->isdeletedbysender = $isdeletedbysender;

        return $this;
    }

    public function getIsdeletedbyreceiver(): ?string
    {
        return $this->isdeletedbyreceiver;
    }

    public function setIsdeletedbyreceiver(string $isdeletedbyreceiver): self
    {
        $this->isdeletedbyreceiver = $isdeletedbyreceiver;

        return $this;
    }

    public function getIslocked(): ?string
    {
        return $this->islocked;
    }

    public function setIslocked(string $islocked): self
    {
        $this->islocked = $islocked;

        return $this;
    }

    public function getSendbysystem(): ?bool
    {
        return $this->sendbysystem;
    }

    public function setSendbysystem(bool $sendbysystem): self
    {
        $this->sendbysystem = $sendbysystem;

        return $this;
    }

    public function getIsreturned(): ?string
    {
        return $this->isreturned;
    }

    public function setIsreturned(string $isreturned): self
    {
        $this->isreturned = $isreturned;

        return $this;
    }


}
