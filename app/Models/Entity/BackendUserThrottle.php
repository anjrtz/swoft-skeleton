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
 * @Table(name="backend_user_throttle")
 * @uses      BackendUserThrottle
 */
class BackendUserThrottle extends Model
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
     * @var string $ipAddress 
     * @Column(name="ip_address", type="string", length=191)
     */
    private $ipAddress;

    /**
     * @var int $attempts 
     * @Column(name="attempts", type="integer", default=0)
     */
    private $attempts;

    /**
     * @var string $lastAttemptAt 
     * @Column(name="last_attempt_at", type="timestamp")
     */
    private $lastAttemptAt;

    /**
     * @var int $isSuspended 
     * @Column(name="is_suspended", type="tinyint", default=0)
     */
    private $isSuspended;

    /**
     * @var string $suspendedAt 
     * @Column(name="suspended_at", type="timestamp")
     */
    private $suspendedAt;

    /**
     * @var int $isBanned 
     * @Column(name="is_banned", type="tinyint", default=0)
     */
    private $isBanned;

    /**
     * @var string $bannedAt 
     * @Column(name="banned_at", type="timestamp")
     */
    private $bannedAt;

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
    public function setIpAddress(string $value): self
    {
        $this->ipAddress = $value;

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
     * @param string $value
     * @return $this
     */
    public function setLastAttemptAt(string $value): self
    {
        $this->lastAttemptAt = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsSuspended(int $value): self
    {
        $this->isSuspended = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSuspendedAt(string $value): self
    {
        $this->suspendedAt = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsBanned(int $value): self
    {
        $this->isBanned = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setBannedAt(string $value): self
    {
        $this->bannedAt = $value;

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
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @return string
     */
    public function getLastAttemptAt()
    {
        return $this->lastAttemptAt;
    }

    /**
     * @return int
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * @return string
     */
    public function getSuspendedAt()
    {
        return $this->suspendedAt;
    }

    /**
     * @return int
     */
    public function getIsBanned()
    {
        return $this->isBanned;
    }

    /**
     * @return string
     */
    public function getBannedAt()
    {
        return $this->bannedAt;
    }

}
