<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Heroes
 *
 * @ORM\Table(name="l2j_gs.heroes")
 * @ORM\Entity
 */
class Heroes
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="class_id", type="decimal", precision=3, scale=0, nullable=false, options={"default"="0"})
     */
    private $classId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="count", type="decimal", precision=3, scale=0, nullable=false, options={"default"="0"})
     */
    private $count = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="played", type="decimal", precision=1, scale=0, nullable=false, options={"default"="0"})
     */
    private $played = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="claimed", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $claimed = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=300, nullable=false, options={"default"=""})
     */
    private $message = '';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getClassId(): ?string
    {
        return $this->classId;
    }

    public function setClassId(string $classId): self
    {
        $this->classId = $classId;

        return $this;
    }

    public function getCount(): ?string
    {
        return $this->count;
    }

    public function setCount(string $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getPlayed(): ?string
    {
        return $this->played;
    }

    public function setPlayed(string $played): self
    {
        $this->played = $played;

        return $this;
    }

    public function getClaimed(): ?string
    {
        return $this->claimed;
    }

    public function setClaimed(string $claimed): self
    {
        $this->claimed = $claimed;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }


}
