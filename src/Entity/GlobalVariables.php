<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalVariables
 *
 * @ORM\Table(name="l2j_gs.global_variables")
 * @ORM\Entity
 */
class GlobalVariables
{
    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=20, nullable=false, options={"default"=""})
     * @ORM\Id
     */
    private $var = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    public function getVar(): ?string
    {
        return $this->var;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
