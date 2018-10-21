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
 * @Table(name="system_files")
 * @uses      SystemFiles
 */
class SystemFiles extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $diskName 
     * @Column(name="disk_name", type="string", length=191)
     * @Required()
     */
    private $diskName;

    /**
     * @var string $fileName 
     * @Column(name="file_name", type="string", length=191)
     * @Required()
     */
    private $fileName;

    /**
     * @var int $fileSize 
     * @Column(name="file_size", type="integer")
     * @Required()
     */
    private $fileSize;

    /**
     * @var string $contentType 
     * @Column(name="content_type", type="string", length=191)
     * @Required()
     */
    private $contentType;

    /**
     * @var string $title 
     * @Column(name="title", type="string", length=191)
     */
    private $title;

    /**
     * @var string $description 
     * @Column(name="description", type="text", length=65535)
     */
    private $description;

    /**
     * @var string $field 
     * @Column(name="field", type="string", length=191)
     */
    private $field;

    /**
     * @var string $attachmentId 
     * @Column(name="attachment_id", type="string", length=191)
     */
    private $attachmentId;

    /**
     * @var string $attachmentType 
     * @Column(name="attachment_type", type="string", length=191)
     */
    private $attachmentType;

    /**
     * @var int $isPublic 
     * @Column(name="is_public", type="tinyint", default=1)
     */
    private $isPublic;

    /**
     * @var int $sortOrder 
     * @Column(name="sort_order", type="integer")
     */
    private $sortOrder;

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
    public function setDiskName(string $value): self
    {
        $this->diskName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setFileName(string $value): self
    {
        $this->fileName = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFileSize(int $value): self
    {
        $this->fileSize = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setContentType(string $value): self
    {
        $this->contentType = $value;

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
    public function setDescription(string $value): self
    {
        $this->description = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setField(string $value): self
    {
        $this->field = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAttachmentId(string $value): self
    {
        $this->attachmentId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAttachmentType(string $value): self
    {
        $this->attachmentType = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsPublic(int $value): self
    {
        $this->isPublic = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setSortOrder(int $value): self
    {
        $this->sortOrder = $value;

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
    public function getDiskName()
    {
        return $this->diskName;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }

    /**
     * @return string
     */
    public function getAttachmentType()
    {
        return $this->attachmentType;
    }

    /**
     * @return mixed
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
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
