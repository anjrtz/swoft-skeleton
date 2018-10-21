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
 * @Table(name="deferred_bindings")
 * @uses      DeferredBindings
 */
class DeferredBindings extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $masterType 
     * @Column(name="master_type", type="string", length=191)
     * @Required()
     */
    private $masterType;

    /**
     * @var string $masterField 
     * @Column(name="master_field", type="string", length=191)
     * @Required()
     */
    private $masterField;

    /**
     * @var string $slaveType 
     * @Column(name="slave_type", type="string", length=191)
     * @Required()
     */
    private $slaveType;

    /**
     * @var string $slaveId 
     * @Column(name="slave_id", type="string", length=191)
     * @Required()
     */
    private $slaveId;

    /**
     * @var string $sessionKey 
     * @Column(name="session_key", type="string", length=191)
     * @Required()
     */
    private $sessionKey;

    /**
     * @var int $isBind 
     * @Column(name="is_bind", type="tinyint", default=1)
     */
    private $isBind;

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
    public function setMasterType(string $value): self
    {
        $this->masterType = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMasterField(string $value): self
    {
        $this->masterField = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSlaveType(string $value): self
    {
        $this->slaveType = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSlaveId(string $value): self
    {
        $this->slaveId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSessionKey(string $value): self
    {
        $this->sessionKey = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsBind(int $value): self
    {
        $this->isBind = $value;

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
    public function getMasterType()
    {
        return $this->masterType;
    }

    /**
     * @return string
     */
    public function getMasterField()
    {
        return $this->masterField;
    }

    /**
     * @return string
     */
    public function getSlaveType()
    {
        return $this->slaveType;
    }

    /**
     * @return string
     */
    public function getSlaveId()
    {
        return $this->slaveId;
    }

    /**
     * @return string
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    /**
     * @return mixed
     */
    public function getIsBind()
    {
        return $this->isBind;
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
