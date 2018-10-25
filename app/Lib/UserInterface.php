<?php
/**
 * Created by PhpStorm.
 * User: bekt
 * Date: 10/21/18
 * Time: 10:46 AM
 */

namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * The interface of demo service
 *
 * @method ResultInterface deferGetUsers(array $ids)
 * @method ResultInterface deferGetUser(string $id)
 * @method ResultInterface deferGetUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc")
 */

interface UserInterface
{
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
    public function getUsers(array $ids);

    /**
     * @param string $id
     * @return array
     */
    public function getUser(string $id);

    public function getUserByUsername(string $username);

    public function getUserByEmail(string $email);

    // public function getUserByCond(int $type, int $uid, string $name, float $price, string $desc = 'desc');
}