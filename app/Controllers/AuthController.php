<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use App\Exception\SwoftExceptionHandler;
use App\Models\Data\UserData;
use App\Models\Entity\Users;
use App\Models\Logic\AuthLogic;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
// use Swoft\View\Bean\Annotation\View;
use Swoft\Http\Message\Server\Response;
use Swoft\Http\Message\Server\Request;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;

/**
 * Class AuthController
 * @Controller(prefix="/auth")
 * @package App\Controllers
 */
class AuthController{

    /**
     * @Inject()
     * @var AuthLogic
     */
    private $authLogic;

    /**
     * @Inject()
     * @var UserData
     */
    private $userData;

    /**
     * this is a example action. access uri path: /auth
     * @RequestMapping(route="/auth/register", method=RequestMethod::POST)
     * @return array
     */
    public function register(Request $request): array
    {
        $response = array(
            'result'=>null,
            'returnCode'=>null,
            'returnDesc'=>null);
        try{
            $userParams = $request->json('user');
            $user = $this->authLogic->register($userParams);
            $response['request'] = $userParams;
            $response['result'] = null;
            $response['returnCode'] = 0;
            $response['returnDesc'] = 'NoError';
        }catch (\Exception $ex){
            $response['result'] = null;
            $response['returnCode'] = -1;
            $response['returnDesc'] = $ex->getMessage();
        }finally{
            return $response;
        }
    }

    /**
     * this is a example action. access uri path: /auth
     * @RequestMapping(route="/auth/login", method=RequestMethod::POST)
     * @return array
     */
    public function login(): array
    {
        try{
            $this->authLogic->authenticate('user', 'pass');
        }catch (\Exception $ex){
//            $this->exceptionHandler->handlerException($this, $ex);
        }
    }
}
