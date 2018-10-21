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
 * @Table(name="andradedev_subscribe_subscribers")
 * @uses      AndradedevSubscribeSubscribers
 */
class AndradedevSubscribeSubscribers extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $email 
     * @Column(name="email", type="string", length=191)
     * @Required()
     */
    private $email;

    /**
     * @var string $latitude 
     * @Column(name="latitude", type="string", length=191)
     */
    private $latitude;

    /**
     * @var string $longitude 
     * @Column(name="longitude", type="string", length=191)
     */
    private $longitude;

    /**
     * @var string $code 
     * @Column(name="code", type="string", length=191)
     */
    private $code;

    /**
     * @var int $status 
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * @var string $name 
     * @Column(name="name", type="string", length=191)
     */
    private $name;

    /**
     * @var string $surname 
     * @Column(name="surname", type="string", length=191)
     */
    private $surname;

    /**
     * @var string $country 
     * @Column(name="country", type="string", length=191)
     */
    private $country;

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
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLatitude(string $value): self
    {
        $this->latitude = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLongitude(string $value): self
    {
        $this->longitude = $value;

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
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
    public function setSurname(string $value): self
    {
        $this->surname = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCountry(string $value): self
    {
        $this->country = $value;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
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
