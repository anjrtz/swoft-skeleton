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
 * @Table(name="system_revisions")
 * @uses      SystemRevisions
 */
class SystemRevisions extends Model
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
     * @var string $field 
     * @Column(name="field", type="string", length=191)
     */
    private $field;

    /**
     * @var string $cast 
     * @Column(name="cast", type="string", length=191)
     */
    private $cast;

    /**
     * @var string $oldValue 
     * @Column(name="old_value", type="text", length=65535)
     */
    private $oldValue;

    /**
     * @var string $newValue 
     * @Column(name="new_value", type="text", length=65535)
     */
    private $newValue;

    /**
     * @var string $revisionableType 
     * @Column(name="revisionable_type", type="string", length=191)
     * @Required()
     */
    private $revisionableType;

    /**
     * @var int $revisionableId 
     * @Column(name="revisionable_id", type="integer")
     * @Required()
     */
    private $revisionableId;

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
    public function setField(string $value): self
    {
        $this->field = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCast(string $value): self
    {
        $this->cast = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOldValue(string $value): self
    {
        $this->oldValue = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setNewValue(string $value): self
    {
        $this->newValue = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setRevisionableType(string $value): self
    {
        $this->revisionableType = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setRevisionableId(int $value): self
    {
        $this->revisionableId = $value;

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
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getCast()
    {
        return $this->cast;
    }

    /**
     * @return string
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @return string
     */
    public function getRevisionableType()
    {
        return $this->revisionableType;
    }

    /**
     * @return int
     */
    public function getRevisionableId()
    {
        return $this->revisionableId;
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
