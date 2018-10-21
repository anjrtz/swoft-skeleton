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
 * @Table(name="jobs")
 * @uses      Jobs
 */
class Jobs extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="bigint")
     */
    private $id;

    /**
     * @var string $queue 
     * @Column(name="queue", type="string", length=191)
     * @Required()
     */
    private $queue;

    /**
     * @var string $payload 
     * @Column(name="payload", type="text", length=65535)
     * @Required()
     */
    private $payload;

    /**
     * @var int $attempts 
     * @Column(name="attempts", type="tinyint")
     * @Required()
     */
    private $attempts;

    /**
     * @var int $reservedAt 
     * @Column(name="reserved_at", type="integer")
     */
    private $reservedAt;

    /**
     * @var int $availableAt 
     * @Column(name="available_at", type="integer")
     * @Required()
     */
    private $availableAt;

    /**
     * @var int $createdAt 
     * @Column(name="created_at", type="integer")
     * @Required()
     */
    private $createdAt;

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
    public function setQueue(string $value): self
    {
        $this->queue = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPayload(string $value): self
    {
        $this->payload = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAttempts(int $value): self
    {
        $this->attempts = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setReservedAt(int $value): self
    {
        $this->reservedAt = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAvailableAt(int $value): self
    {
        $this->availableAt = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCreatedAt(int $value): self
    {
        $this->createdAt = $value;

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
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @return int
     */
    public function getReservedAt()
    {
        return $this->reservedAt;
    }

    /**
     * @return int
     */
    public function getAvailableAt()
    {
        return $this->availableAt;
    }

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}
