<?php
/**
 * Created by PhpStorm.
 * User: bekt
 * Date: 10/21/18
 * Time: 10:48 AM
 */

namespace App\Services;


use App\Lib\UserInterface;
use App\Models\Data\UserData;
use App\Models\Entity\Users;
use App\Models\Logic\UserLogic;
use Swoft\Core\ResultInterface;

/**
 * @method ResultInterface deferGetUsers(array $ids)
 * @method ResultInterface deferGetUser(string $id)
 * @method ResultInterface deferGetUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc")
 */
class UserService implements UserInterface
{

    /**
     * @Inject()
     * @var UserData
     */
    private $userData;


    /**
     * @param array $ids
     * @return array
     * <pre>
     * [
     *    'uid' => [],
     *    'uid2' => [],
     *    ......
     * ]
     * <pre>
     */
    public function getUsers(array $ids)
    {
        return ;
    }

    /**
     * @param string $id
     * @return array
     */
    public function getUser(string $id)
    {
        return $this->userData->getUserInfo($id);
    }


    public function __call($name, $arguments)
    {
        // TODO: Implement @method ResultInterface deferGetUsers(array $ids)
        // TODO: Implement @method ResultInterface deferGetUser(string $id)
        // TODO: Implement @method ResultInterface deferGetUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc")
    }

    public function getUserByUsername(string $username)
    {
        return $this->userData->getUserByUsername($username);
    }

    public function getUserByEmail(string $email)
    {
        return $this->getUserByEmail($email);
    }
}