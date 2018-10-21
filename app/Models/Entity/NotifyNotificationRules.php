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
 * @Table(name="notify_notification_rules")
 * @uses      NotifyNotificationRules
 */
class NotifyNotificationRules extends Model
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
     * @var string $className 
     * @Column(name="class_name", type="string", length=191)
     */
    private $className;

    /**
     * @var string $description 
     * @Column(name="description", type="text", length=65535)
     */
    private $description;

    /**
     * @var string $configData 
     * @Column(name="config_data", type="text", length=16777215)
     */
    private $configData;

    /**
     * @var string $conditionData 
     * @Column(name="condition_data", type="text", length=16777215)
     */
    private $conditionData;

    /**
     * @var int $isEnabled 
     * @Column(name="is_enabled", type="tinyint", default=0)
     */
    private $isEnabled;

    /**
     * @var int $isCustom 
     * @Column(name="is_custom", type="tinyint", default=1)
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
    public function setClassName(string $value): self
    {
        $this->className = $value;

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
    public function setConfigData(string $value): self
    {
        $this->configData = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setConditionData(string $value): self
    {
        $this->conditionData = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsEnabled(int $value): self
    {
        $this->isEnabled = $value;

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
    public function getClassName()
    {
        return $this->className;
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
    public function getConfigData()
    {
        return $this->configData;
    }

    /**
     * @return string
     */
    public function getConditionData()
    {
        return $this->conditionData;
    }

    /**
     * @return int
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @return mixed
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
