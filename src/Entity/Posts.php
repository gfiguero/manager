<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="l2j_gs.posts", indexes={@ORM\Index(name="post_forum_id", columns={"post_forum_id"})})
 * @ORM\Entity
 */
class Posts
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
     * @var int
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $postId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="post_owner_name", type="string", length=255, nullable=false, options={"default"=""})
     */
    private $postOwnerName = '';

    /**
     * @var int
     *
     * @ORM\Column(name="post_ownerid", type="integer", nullable=false, options={"default"="0"})
     */
    private $postOwnerid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="post_date", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $postDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="post_topic_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $postTopicId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="post_forum_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $postForumId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="post_txt", type="text", length=65535, nullable=false)
     */
    private $postTxt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostId(): ?int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): self
    {
        $this->postId = $postId;

        return $this;
    }

    public function getPostOwnerName(): ?string
    {
        return $this->postOwnerName;
    }

    public function setPostOwnerName(string $postOwnerName): self
    {
        $this->postOwnerName = $postOwnerName;

        return $this;
    }

    public function getPostOwnerid(): ?int
    {
        return $this->postOwnerid;
    }

    public function setPostOwnerid(int $postOwnerid): self
    {
        $this->postOwnerid = $postOwnerid;

        return $this;
    }

    public function getPostDate(): ?string
    {
        return $this->postDate;
    }

    public function setPostDate(string $postDate): self
    {
        $this->postDate = $postDate;

        return $this;
    }

    public function getPostTopicId(): ?int
    {
        return $this->postTopicId;
    }

    public function setPostTopicId(int $postTopicId): self
    {
        $this->postTopicId = $postTopicId;

        return $this;
    }

    public function getPostForumId(): ?int
    {
        return $this->postForumId;
    }

    public function setPostForumId(int $postForumId): self
    {
        $this->postForumId = $postForumId;

        return $this;
    }

    public function getPostTxt(): ?string
    {
        return $this->postTxt;
    }

    public function setPostTxt(string $postTxt): self
    {
        $this->postTxt = $postTxt;

        return $this;
    }


}
