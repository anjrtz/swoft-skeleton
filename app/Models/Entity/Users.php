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
 * @Table(name="users")
 * @uses      Users
 */
class Users extends Model
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
     * @var string $username 
     * @Column(name="username", type="string", length=191)
     */
    private $username;

    /**
     * @var string $surname 
     * @Column(name="surname", type="string", length=191)
     */
    private $surname;

    /**
     * @var string $deletedAt 
     * @Column(name="deleted_at", type="timestamp")
     */
    private $deletedAt;

    /**
     * @var string $lastSeen 
     * @Column(name="last_seen", type="timestamp")
     */
    private $lastSeen;

    /**
     * @var int $isGuest 
     * @Column(name="is_guest", type="tinyint", default=0)
     */
    private $isGuest;

    /**
     * @var int $isSuperuser 
     * @Column(name="is_superuser", type="tinyint", default=0)
     */
    private $isSuperuser;

    /**
     * @var string $phone 
     * @Column(name="phone", type="string", length=100)
     */
    private $phone;

    /**
     * @var string $company 
     * @Column(name="company", type="string", length=100)
     */
    private $company;

    /**
     * @var string $streetAddr 
     * @Column(name="street_addr", type="string", length=191)
     */
    private $streetAddr;

    /**
     * @var string $city 
     * @Column(name="city", type="string", length=100)
     */
    private $city;

    /**
     * @var string $zip 
     * @Column(name="zip", type="string", length=20)
     */
    private $zip;

    /**
     * @var string $firstName 
     * @Column(name="first_name", type="string", length=20)
     */
    private $firstName;

    /**
     * @var string $lastName 
     * @Column(name="last_name", type="string", length=20)
     */
    private $lastName;

    /**
     * @var string $isCompleted 
     * @Column(name="is_completed", type="string", length=1)
     */
    private $isCompleted;

    /**
     * @var int $stateId 
     * @Column(name="state_id", type="integer")
     */
    private $stateId;

    /**
     * @var int $countryId 
     * @Column(name="country_id", type="integer")
     */
    private $countryId;

    /**
     * @var string $mobile 
     * @Column(name="mobile", type="string", length=100)
     */
    private $mobile;

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
     * @param string $value
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSurname(string $value): self
    {
        $this->surname = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDeletedAt(string $value): self
    {
        $this->deletedAt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLastSeen(string $value): self
    {
        $this->lastSeen = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIsGuest(int $value): self
    {
        $this->isGuest = $value;

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
     * @param string $value
     * @return $this
     */
    public function setPhone(string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCompany(string $value): self
    {
        $this->company = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setStreetAddr(string $value): self
    {
        $this->streetAddr = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCity(string $value): self
    {
        $this->city = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setZip(string $value): self
    {
        $this->zip = $value;

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
    public function setIsCompleted(string $value): self
    {
        $this->isCompleted = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStateId(int $value): self
    {
        $this->stateId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCountryId(int $value): self
    {
        $this->countryId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMobile(string $value): self
    {
        $this->mobile = $value;

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
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @return string
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * @return int
     */
    public function getIsGuest()
    {
        return $this->isGuest;
    }

    /**
     * @return int
     */
    public function getIsSuperuser()
    {
        return $this->isSuperuser;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getStreetAddr()
    {
        return $this->streetAddr;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
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
    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    /**
     * @return int
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

}
