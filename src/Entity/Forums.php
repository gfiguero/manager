<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forums
 *
 * @ORM\Table(name="l2j_gs.forums", indexes={@ORM\Index(name="forum_owner_id", columns={"forum_owner_id"})})
 * @ORM\Entity
 */
class Forums
{
    /**
     * @var int
     *
     * @ORM\Column(name="forum_id", type="integer", nullable=false, options={"default"="0"})
     * @ORM\Id
     */
    private $forumId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="forum_name", type="string", length=255, nullable=false, options={"default"=""})
     */
    private $forumName = '';

    /**
     * @var int
     *
     * @ORM\Column(name="forum_parent", type="integer", nullable=false, options={"default"="0"})
     */
    private $forumParent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="forum_post", type="integer", nullable=false, options={"default"="0"})
     */
    private $forumPost = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="forum_type", type="integer", nullable=false, options={"default"="0"})
     */
    private $forumType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="forum_perm", type="integer", nullable=false, options={"default"="0"})
     */
    private $forumPerm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="forum_owner_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $forumOwnerId = '0';

    public function getForumId(): ?int
    {
        return $this->forumId;
    }

    public function getForumName(): ?string
    {
        return $this->forumName;
    }

    public function setForumName(string $forumName): self
    {
        $this->forumName = $forumName;

        return $this;
    }

    public function getForumParent(): ?int
    {
        return $this->forumParent;
    }

    public function setForumParent(int $forumParent): self
    {
        $this->forumParent = $forumParent;

        return $this;
    }

    public function getForumPost(): ?int
    {
        return $this->forumPost;
    }

    public function setForumPost(int $forumPost): self
    {
        $this->forumPost = $forumPost;

        return $this;
    }

    public function getForumType(): ?int
    {
        return $this->forumType;
    }

    public function setForumType(int $forumType): self
    {
        $this->forumType = $forumType;

        return $this;
    }

    public function getForumPerm(): ?int
    {
        return $this->forumPerm;
    }

    public function setForumPerm(int $forumPerm): self
    {
        $this->forumPerm = $forumPerm;

        return $this;
    }

    public function getForumOwnerId(): ?int
    {
        return $this->forumOwnerId;
    }

    public function setForumOwnerId(int $forumOwnerId): self
    {
        $this->forumOwnerId = $forumOwnerId;

        return $this;
    }


}
