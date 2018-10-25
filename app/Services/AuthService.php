<?php
/**
 * Created by PhpStorm.
 * User: bekt
 * Date: 10/22/18
 * Time: 6:48 AM
 */

namespace App\Services;


use Jasny\Auth;
use Jasny\Auth\User;

use App\Lib\UserInterface;
use App\Models\Data\UserData;
use App\Models\Entity\Users;
use App\Models\Logic\UserLogic;
use Swoft\Core\ResultInterface;

class AuthService extends Auth
{
    /**
     * @Inject()
     * @var UserData
     */
    private $userData;


    /**
     * Persist the current user id across requests
     *
     * @return void
     */
    protected function persistCurrentUser()
    {
        // session()->put(['currentUser' => $value]);
    }

    /**
     * Get current authenticated user id
     *
     * @return mixed
     */
    protected function getCurrentUserId()
    {
        $return =  session()->get('currentUser');
        if(!empty($return)){
            return $return->id;
        }else{
            return null;
        }
    }

    /**
     * Fetch a user by ID
     *
     * @param int|string $id
     * @return User|null
     */
    public function fetchUserById($id)
    {
        return $this->userData->getUserByID($id);
    }

    /**
     * Fetch a user by username
     *
     * @param string $username
     * @return User|null
     */
    public function fetchUserByUsername($username)
    {
        return $this->userData->getUserByUsername($username);
    }
}