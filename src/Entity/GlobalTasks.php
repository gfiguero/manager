<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalTasks
 *
 * @ORM\Table(name="l2j_gs.global_tasks")
 * @ORM\Entity
 */
class GlobalTasks
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
     * @ORM\Column(name="task", type="string", length=50, nullable=false, options={"default"=""})
     */
    private $task = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false, options={"default"=""})
     */
    private $type = '';

    /**
     * @var int
     *
     * @ORM\Column(name="last_activation", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $lastActivation = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="param1", type="string", length=100, nullable=false, options={"default"=""})
     */
    private $param1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="param2", type="string", length=100, nullable=false, options={"default"=""})
     */
    private $param2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="param3", type="string", length=255, nullable=false, options={"default"=""})
     */
    private $param3 = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTask(): ?string
    {
        return $this->task;
    }

    public function setTask(string $task): self
    {
        $this->task = $task;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLastActivation(): ?string
    {
        return $this->lastActivation;
    }

    public function setLastActivation(string $lastActivation): self
    {
        $this->lastActivation = $lastActivation;

        return $this;
    }

    public function getParam1(): ?string
    {
        return $this->param1;
    }

    public function setParam1(string $param1): self
    {
        $this->param1 = $param1;

        return $this;
    }

    public function getParam2(): ?string
    {
        return $this->param2;
    }

    public function setParam2(string $param2): self
    {
        $this->param2 = $param2;

        return $this;
    }

    public function getParam3(): ?string
    {
        return $this->param3;
    }

    public function setParam3(string $param3): self
    {
        $this->param3 = $param3;

        return $this;
    }


}
