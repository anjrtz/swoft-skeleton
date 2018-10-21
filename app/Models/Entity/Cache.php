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
 * @Table(name="cache")
 * @uses      Cache
 */
class Cache extends Model
{
    /**
     * @var string $key 
     * @Id()
     * @Column(name="key", type="string", length=191)
     */
    private $key;

    /**
     * @var string $value 
     * @Column(name="value", type="text", length=4294967295)
     * @Required()
     */
    private $value;

    /**
     * @var int $expiration 
     * @Column(name="expiration", type="integer")
     * @Required()
     */
    private $expiration;

    /**
     * @param string $value
     * @return $this
     */
    public function setKey(string $value)
    {
        $this->key = $value;

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
     * @param int $value
     * @return $this
     */
    public function setExpiration(int $value): self
    {
        $this->expiration = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

}
