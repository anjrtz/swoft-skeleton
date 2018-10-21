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
 * @Table(name="system_mail_layouts")
 * @uses      SystemMailLayouts
 */
class SystemMailLayouts extends Model
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
     * @var string $code 
     * @Column(name="code", type="string", length=191)
     */
    private $code;

    /**
     * @var string $contentHtml 
     * @Column(name="content_html", type="text", length=65535)
     */
    private $contentHtml;

    /**
     * @var string $contentText 
     * @Column(name="content_text", type="text", length=65535)
     */
    private $contentText;

    /**
     * @var string $contentCss 
     * @Column(name="content_css", type="text", length=65535)
     */
    private $contentCss;

    /**
     * @var int $isLocked 
     * @Column(name="is_locked", type="tinyint", default=0)
     */
    private $isLocked;

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
    public function setCode(string $value): self
    {
        $this->code = $value;

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
    public function setContentText(string $value): self
    {
        $this->contentText = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setContentCss(string $value): self
    {
        $this->contentCss = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsLocked(int $value): self
    {
        $this->isLocked = $value;

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
    public function getCode()
    {
        return $this->code;
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
    public function getContentText()
    {
        return $this->contentText;
    }

    /**
     * @return string
     */
    public function getContentCss()
    {
        return $this->contentCss;
    }

    /**
     * @return int
     */
    public function getIsLocked()
    {
        return $this->isLocked;
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
