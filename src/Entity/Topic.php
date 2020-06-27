<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topic
 *
 * @ORM\Table(name="l2j_gs.topic")
 * @ORM\Entity
 */
class Topic
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $topicId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="topic_forum_id", type="integer", nullable=false, options={"default"="0"})
     */
    private $topicForumId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_name", type="string", length=255, nullable=false, options={"default"=""})
     */
    private $topicName = '';

    /**
     * @var int
     *
     * @ORM\Column(name="topic_date", type="bigint", nullable=false, options={"unsigned"=true, "default"="0"})
     */
    private $topicDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="topic_ownername", type="string", length=255, nullable=false, options={"default"="0"})
     */
    private $topicOwnername = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="topic_ownerid", type="integer", nullable=false, options={"default"="0"})
     */
    private $topicOwnerid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="topic_type", type="integer", nullable=false, options={"default"="0"})
     */
    private $topicType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="topic_reply", type="integer", nullable=false, options={"default"="0"})
     */
    private $topicReply = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTopicId(): ?int
    {
        return $this->topicId;
    }

    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    public function getTopicForumId(): ?int
    {
        return $this->topicForumId;
    }

    public function setTopicForumId(int $topicForumId): self
    {
        $this->topicForumId = $topicForumId;

        return $this;
    }

    public function getTopicName(): ?string
    {
        return $this->topicName;
    }

    public function setTopicName(string $topicName): self
    {
        $this->topicName = $topicName;

        return $this;
    }

    public function getTopicDate(): ?string
    {
        return $this->topicDate;
    }

    public function setTopicDate(string $topicDate): self
    {
        $this->topicDate = $topicDate;

        return $this;
    }

    public function getTopicOwnername(): ?string
    {
        return $this->topicOwnername;
    }

    public function setTopicOwnername(string $topicOwnername): self
    {
        $this->topicOwnername = $topicOwnername;

        return $this;
    }

    public function getTopicOwnerid(): ?int
    {
        return $this->topicOwnerid;
    }

    public function setTopicOwnerid(int $topicOwnerid): self
    {
        $this->topicOwnerid = $topicOwnerid;

        return $this;
    }

    public function getTopicType(): ?int
    {
        return $this->topicType;
    }

    public function setTopicType(int $topicType): self
    {
        $this->topicType = $topicType;

        return $this;
    }

    public function getTopicReply(): ?int
    {
        return $this->topicReply;
    }

    public function setTopicReply(int $topicReply): self
    {
        $this->topicReply = $topicReply;

        return $this;
    }


}
