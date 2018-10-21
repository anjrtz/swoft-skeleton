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
 * @Table(name="failed_jobs")
 * @uses      FailedJobs
 */
class FailedJobs extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $connection 
     * @Column(name="connection", type="text", length=65535)
     * @Required()
     */
    private $connection;

    /**
     * @var string $queue 
     * @Column(name="queue", type="text", length=65535)
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
     * @var string $exception 
     * @Column(name="exception", type="text", length=4294967295)
     */
    private $exception;

    /**
     * @var string $failedAt 
     * @Column(name="failed_at", type="timestamp")
     */
    private $failedAt;

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
    public function setConnection(string $value): self
    {
        $this->connection = $value;

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
     * @param string $value
     * @return $this
     */
    public function setException(string $value): self
    {
        $this->exception = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setFailedAt(string $value): self
    {
        $this->failedAt = $value;

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
    public function getConnection()
    {
        return $this->connection;
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
     * @return string
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @return string
     */
    public function getFailedAt()
    {
        return $this->failedAt;
    }

}
