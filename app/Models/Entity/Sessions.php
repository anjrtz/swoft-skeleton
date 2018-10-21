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
 * @Table(name="sessions")
 * @uses      Sessions
 */
class Sessions extends Model
{
    /**
     * @var string $id 
     * @Id()
     * @Column(name="id", type="string", length=191)
     */
    private $id;

    /**
     * @var string $payload 
     * @Column(name="payload", type="text", length=65535)
     */
    private $payload;

    /**
     * @var int $lastActivity 
     * @Column(name="last_activity", type="integer")
     */
    private $lastActivity;

    /**
     * @var int $userId 
     * @Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string $ipAddress 
     * @Column(name="ip_address", type="string", length=45)
     */
    private $ipAddress;

    /**
     * @var string $userAgent 
     * @Column(name="user_agent", type="text", length=65535)
     */
    private $userAgent;

    /**
     * @param string $value
     * @return $this
     */
    public function setId(string $value)
    {
        $this->id = $value;

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
    public function setLastActivity(int $value): self
    {
        $this->lastActivity = $value;

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
    public function setIpAddress(string $value): self
    {
        $this->ipAddress = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUserAgent(string $value): self
    {
        $this->userAgent = $value;

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
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return int
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
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
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

}
