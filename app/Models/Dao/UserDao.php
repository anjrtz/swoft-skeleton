<?php
/**
 * Created by PhpStorm.
 * User: bekt
 * Date: 10/21/18
 * Time: 11:10 AM
 */

namespace App\Models\Dao;

use App\Models\Entity\Users;
use Swoft\Bean\Annotation\Bean;

/**
 *
 * @Bean()
 * @uses      UserDao
 * @version   2017年04月25日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UserDao
{
    public function getUserById($id){
        return Users::findOne(['id'=>$id])->getResult();
    }

    public function getUsersByIds($ids){
        return Users::findAll(['id'=>$ids])->getResult();
    }

    public function getUserByCond($arrayField){
        return Users::findOne($arrayField)->getResult();
    }

    public function getUsersByCond($arrayField){
        return Users::findAll($arrayField)->getResult();
    }

    public function create($userdata){
        $result = null;
        try{
            $user = new Users();
            $user->fill($userdata);
            $result = $user->save()->getResult();
        }catch (\Exception $ex){
            throw $ex;
        }finally{
            return $result;
        }
    }

    public function save($user){
        if(is_array($user)){
            $userObj = new Users();
            $userObj->fill($user);
            $user = $userObj;
        }
        return $user->save()->getResult();
    }

}