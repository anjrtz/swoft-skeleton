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
 * @Table(name="backend_users")
 * @uses      BackendUsers
 */
class BackendUsers extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $firstName 
     * @Column(name="first_name", type="string", length=191)
     */
    private $firstName;

    /**
     * @var string $lastName 
     * @Column(name="last_name", type="string", length=191)
     */
    private $lastName;

    /**
     * @var string $login 
     * @Column(name="login", type="string", length=191)
     * @Required()
     */
    private $login;

    /**
     * @var string $email 
     * @Column(name="email", type="string", length=191)
     * @Required()
     */
    private $email;

    /**
     * @var string $password 
     * @Column(name="password", type="string", length=191)
     * @Required()
     */
    private $password;

    /**
     * @var string $activationCode 
     * @Column(name="activation_code", type="string", length=191)
     */
    private $activationCode;

    /**
     * @var string $persistCode 
     * @Column(name="persist_code", type="string", length=191)
     */
    private $persistCode;

    /**
     * @var string $resetPasswordCode 
     * @Column(name="reset_password_code", type="string", length=191)
     */
    private $resetPasswordCode;

    /**
     * @var string $permissions 
     * @Column(name="permissions", type="text", length=65535)
     */
    private $permissions;

    /**
     * @var int $isActivated 
     * @Column(name="is_activated", type="tinyint", default=0)
     */
    private $isActivated;

    /**
     * @var int $roleId 
     * @Column(name="role_id", type="integer")
     */
    private $roleId;

    /**
     * @var string $activatedAt 
     * @Column(name="activated_at", type="timestamp")
     */
    private $activatedAt;

    /**
     * @var string $lastLogin 
     * @Column(name="last_login", type="timestamp")
     */
    private $lastLogin;

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
     * @var int $isSuperuser 
     * @Column(name="is_superuser", type="tinyint", default=0)
     */
    private $isSuperuser;

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
    public function setFirstName(string $value): self
    {
        $this->firstName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLastName(string $value): self
    {
        $this->lastName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLogin(string $value): self
    {
        $this->login = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setActivationCode(string $value): self
    {
        $this->activationCode = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPersistCode(string $value): self
    {
        $this->persistCode = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setResetPasswordCode(string $value): self
    {
        $this->resetPasswordCode = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPermissions(string $value): self
    {
        $this->permissions = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsActivated(int $value): self
    {
        $this->isActivated = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setRoleId(int $value): self
    {
        $this->roleId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setActivatedAt(string $value): self
    {
        $this->activatedAt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLastLogin(string $value): self
    {
        $this->lastLogin = $value;

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
     * @param int $value
     * @return $this
     */
    public function setIsSuperuser(int $value): self
    {
        $this->isSuperuser = $value;

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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getActivationCode()
    {
        return $this->activationCode;
    }

    /**
     * @return string
     */
    public function getPersistCode()
    {
        return $this->persistCode;
    }

    /**
     * @return string
     */
    public function getResetPasswordCode()
    {
        return $this->resetPasswordCode;
    }

    /**
     * @return string
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @return int
     */
    public function getIsActivated()
    {
        return $this->isActivated;
    }

    /**
     * @return int
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @return string
     */
    public function getActivatedAt()
    {
        return $this->activatedAt;
    }

    /**
     * @return string
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
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

    /**
     * @return int
     */
    public function getIsSuperuser()
    {
        return $this->isSuperuser;
    }

}
