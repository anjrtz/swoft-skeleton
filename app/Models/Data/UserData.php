<?php
/**
 * Created by PhpStorm.
 * User: bekt
 * Date: 10/21/18
 * Time: 11:31 AM
 */

namespace App\Models\Data;

use App\Models\Dao\UserDao;
use App\Models\Entity\Users;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use Swoft\Exception\Exception;

/**
 *
 * @Bean()
 * @uses      UserData
 * @version   2017年04月25日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UserData
{
    /**
     * @Inject()
     * @var UserDao
     */
    private $userDao;

    public function getUserInfo($id){
        return $this->userDao->getUserById($id);
    }

    public function getUserByID($id){
        return $this->userDao->getUserByCond(['id'=>$id]);
    }

    public function getUserByUsername($username){
        return $this->userDao->getUserByCond(['username'=>$username]);
    }

    public function getUserByEmail($email){
        return $this->userDao->getUserByCond(['email'=>$email]);
    }

    public function create(array $user){
        $user = $this->userDao->getUsersByCond(['username'=>$user['username']]);
        if(empty($user)){
            return $this->userDao->create($user);
        }else{
            throw new Exception('RecordAlreadyExists');
        }
    }

    public function save($user){
        return $this->userDao->saveUser($user);
    }
}