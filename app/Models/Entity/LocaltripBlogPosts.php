<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="localtrip_blog_posts")
 * @uses      LocaltripBlogPosts
 */
class LocaltripBlogPosts extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userId 
     * @Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string $title 
     * @Column(name="title", type="string", length=191)
     */
    private $title;

    /**
     * @var string $slug 
     * @Column(name="slug", type="string", length=191)
     * @Required()
     */
    private $slug;

    /**
     * @var string $excerpt 
     * @Column(name="excerpt", type="text", length=65535)
     */
    private $excerpt;

    /**
     * @var string $content 
     * @Column(name="content", type="text", length=4294967295)
     */
    private $content;

    /**
     * @var string $contentHtml 
     * @Column(name="content_html", type="text", length=4294967295)
     */
    private $contentHtml;

    /**
     * @var string $publishedAt 
     * @Column(name="published_at", type="timestamp")
     */
    private $publishedAt;

    /**
     * @var int $published 
     * @Column(name="published", type="tinyint", default=0)
     */
    private $published;

    /**
     * @var string $createdAt 
     * @Column(name="created_at", type="timestamp")
     */
    private $createdAt;

    /**
     * @var string $updatedAt 
     * @Column(name="updated_at", type="timestamp")
     */
    private $updatedAt;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->userId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSlug(string $value): self
    {
        $this->slug = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setExcerpt(string $value): self
    {
        $this->excerpt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setContentHtml(string $value): self
    {
        $this->contentHtml = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPublishedAt(string $value): self
    {
        $this->publishedAt = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setPublished(int $value): self
    {
        $this->published = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCreatedAt(string $value): self
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUpdatedAt(string $value): self
    {
        $this->updatedAt = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getContentHtml()
    {
        return $this->contentHtml;
    }

    /**
     * @return string
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @return int
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}
