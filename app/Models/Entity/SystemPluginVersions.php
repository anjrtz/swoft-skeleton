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
 * @Table(name="system_plugin_versions")
 * @uses      SystemPluginVersions
 */
class SystemPluginVersions extends Model
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
     * @Required()
     */
    private $code;

    /**
     * @var string $version 
     * @Column(name="version", type="string", length=50)
     * @Required()
     */
    private $version;

    /**
     * @var string $createdAt 
     * @Column(name="created_at", type="timestamp")
     */
    private $createdAt;

    /**
     * @var int $isDisabled 
     * @Column(name="is_disabled", type="tinyint", default=0)
     */
    private $isDisabled;

    /**
     * @var int $isFrozen 
     * @Column(name="is_frozen", type="tinyint", default=0)
     */
    private $isFrozen;

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
    public function setVersion(string $value): self
    {
        $this->version = $value;

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
     * @param int $value
     * @return $this
     */
    public function setIsDisabled(int $value): self
    {
        $this->isDisabled = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsFrozen(int $value): self
    {
        $this->isFrozen = $value;

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
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return int
     */
    public function getIsDisabled()
    {
        return $this->isDisabled;
    }

    /**
     * @return int
     */
    public function getIsFrozen()
    {
        return $this->isFrozen;
    }

}
