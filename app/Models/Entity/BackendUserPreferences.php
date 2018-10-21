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
 * @Table(name="backend_user_preferences")
 * @uses      BackendUserPreferences
 */
class BackendUserPreferences extends Model
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
     * @Required()
     */
    private $userId;

    /**
     * @var string $namespace 
     * @Column(name="namespace", type="string", length=100)
     * @Required()
     */
    private $namespace;

    /**
     * @var string $group 
     * @Column(name="group", type="string", length=50)
     * @Required()
     */
    private $group;

    /**
     * @var string $item 
     * @Column(name="item", type="string", length=150)
     * @Required()
     */
    private $item;

    /**
     * @var string $value 
     * @Column(name="value", type="text", length=65535)
     */
    private $value;

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
    public function setNamespace(string $value): self
    {
        $this->namespace = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setGroup(string $value): self
    {
        $this->group = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setItem(string $value): self
    {
        $this->item = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

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
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
