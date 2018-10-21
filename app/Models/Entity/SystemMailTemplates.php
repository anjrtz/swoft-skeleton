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
 * @Table(name="system_mail_templates")
 * @uses      SystemMailTemplates
 */
class SystemMailTemplates extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $code 
     * @Column(name="code", type="string", length=191)
     */
    private $code;

    /**
     * @var string $subject 
     * @Column(name="subject", type="string", length=191)
     */
    private $subject;

    /**
     * @var string $description 
     * @Column(name="description", type="text", length=65535)
     */
    private $description;

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
     * @var int $layoutId 
     * @Column(name="layout_id", type="integer")
     */
    private $layoutId;

    /**
     * @var int $isCustom 
     * @Column(name="is_custom", type="tinyint", default=0)
     */
    private $isCustom;

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
    public function setCode(string $value): self
    {
        $this->code = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSubject(string $value): self
    {
        $this->subject = $value;

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
     * @param int $value
     * @return $this
     */
    public function setLayoutId(int $value): self
    {
        $this->layoutId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsCustom(int $value): self
    {
        $this->isCustom = $value;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @return int
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * @return int
     */
    public function getIsCustom()
    {
        return $this->isCustom;
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
