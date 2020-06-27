<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Announcements
 *
 * @ORM\Table(name="l2j_gs.announcements")
 * @ORM\Entity
 */
class Announcements
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="initial", type="bigint", nullable=false, options={"default"="0"})
     */
    private $initial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="delay", type="bigint", nullable=false, options={"default"="0"})
     */
    private $delay = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="repeat", type="integer", nullable=false, options={"default"="0"})
     */
    private $repeat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="text", length=65535, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getInitial(): ?string
    {
        return $this->initial;
    }

    public function setInitial(string $initial): self
    {
        $this->initial = $initial;

        return $this;
    }

    public function getDelay(): ?string
    {
        return $this->delay;
    }

    public function setDelay(string $delay): self
    {
        $this->delay = $delay;

        return $this;
    }

    public function getRepeat(): ?int
    {
        return $this->repeat;
    }

    public function setRepeat(int $repeat): self
    {
        $this->repeat = $repeat;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }


}
