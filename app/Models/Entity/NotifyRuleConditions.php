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
 * @Table(name="notify_rule_conditions")
 * @uses      NotifyRuleConditions
 */
class NotifyRuleConditions extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $className 
     * @Column(name="class_name", type="string", length=191)
     */
    private $className;

    /**
     * @var string $configData 
     * @Column(name="config_data", type="text", length=16777215)
     */
    private $configData;

    /**
     * @var string $conditionControlType 
     * @Column(name="condition_control_type", type="string", length=100)
     */
    private $conditionControlType;

    /**
     * @var string $ruleHostType 
     * @Column(name="rule_host_type", type="string", length=100)
     */
    private $ruleHostType;

    /**
     * @var int $ruleHostId 
     * @Column(name="rule_host_id", type="integer")
     */
    private $ruleHostId;

    /**
     * @var int $ruleParentId 
     * @Column(name="rule_parent_id", type="integer")
     */
    private $ruleParentId;

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
    public function setClassName(string $value): self
    {
        $this->className = $value;

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
    public function setConditionControlType(string $value): self
    {
        $this->conditionControlType = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setRuleHostType(string $value): self
    {
        $this->ruleHostType = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setRuleHostId(int $value): self
    {
        $this->ruleHostId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setRuleParentId(int $value): self
    {
        $this->ruleParentId = $value;

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
    public function getClassName()
    {
        return $this->className;
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
    public function getConditionControlType()
    {
        return $this->conditionControlType;
    }

    /**
     * @return string
     */
    public function getRuleHostType()
    {
        return $this->ruleHostType;
    }

    /**
     * @return int
     */
    public function getRuleHostId()
    {
        return $this->ruleHostId;
    }

    /**
     * @return int
     */
    public function getRuleParentId()
    {
        return $this->ruleParentId;
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
