<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterContacts
 *
 * @ORM\Table(name="l2j_gs.character_contacts")
 * @ORM\Entity
 */
class CharacterContacts
{
    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="contactId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $contactid = '0';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getContactid(): ?int
    {
        return $this->contactid;
    }


}
