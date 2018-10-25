<?php
/**
 * Created by PhpStorm.
 * User: bekt
 * Date: 10/21/18
 * Time: 12:21 PM
 */

namespace App\Models\Logic;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use Swoft\Rpc\Client\Bean\Annotation\Reference;

/**
 * 用户逻辑层
 * 同时可以被controller server task使用
 *
 * @Bean()
 * @uses      UserLogic
 * @version   2017年10月15日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class AuthLogic
{
    /**
     * @Reference("user")
     *
     * @var \App\Lib\UserInterface
     */
    private $userService;

    /**
     * @Inject()
     * @var \App\Models\Data\UserData
     */
    private $userData;

    public function register(array $userparams){
        $user = $this->userData->create($userparams);
        return $user;
    }


    public function authenticate(string $username, string $password){
        $user = $this->userData->getUserByUsername($username);
        return $user;
    }

}