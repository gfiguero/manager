<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterFriends
 *
 * @ORM\Table(name="l2j_gs.character_friends")
 * @ORM\Entity
 */
class CharacterFriends
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
     * @ORM\Column(name="friendId", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     * @ORM\Id
     */
    private $friendid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="relation", type="integer", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $relation = '0';

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getFriendid(): ?int
    {
        return $this->friendid;
    }

    public function getRelation(): ?int
    {
        return $this->relation;
    }

    public function setRelation(int $relation): self
    {
        $this->relation = $relation;

        return $this;
    }


}
