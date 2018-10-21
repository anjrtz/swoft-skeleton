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
 * @Table(name="localtrip_blog_categories")
 * @uses      LocaltripBlogCategories
 */
class LocaltripBlogCategories extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 
     * @Column(name="name", type="string", length=191)
     */
    private $name;

    /**
     * @var string $slug 
     * @Column(name="slug", type="string", length=191)
     */
    private $slug;

    /**
     * @var string $code 
     * @Column(name="code", type="string", length=191)
     */
    private $code;

    /**
     * @var string $description 
     * @Column(name="description", type="text", length=65535)
     */
    private $description;

    /**
     * @var int $parentId 
     * @Column(name="parent_id", type="integer")
     */
    private $parentId;

    /**
     * @var int $nestLeft 
     * @Column(name="nest_left", type="integer")
     */
    private $nestLeft;

    /**
     * @var int $nestRight 
     * @Column(name="nest_right", type="integer")
     */
    private $nestRight;

    /**
     * @var int $nestDepth 
     * @Column(name="nest_depth", type="integer")
     */
    private $nestDepth;

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
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

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
    public function setCode(string $value): self
    {
        $this->code = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setParentId(int $value): self
    {
        $this->parentId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setNestLeft(int $value): self
    {
        $this->nestLeft = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setNestRight(int $value): self
    {
        $this->nestRight = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setNestDepth(int $value): self
    {
        $this->nestDepth = $value;

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @return int
     */
    public function getNestLeft()
    {
        return $this->nestLeft;
    }

    /**
     * @return int
     */
    public function getNestRight()
    {
        return $this->nestRight;
    }

    /**
     * @return int
     */
    public function getNestDepth()
    {
        return $this->nestDepth;
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
