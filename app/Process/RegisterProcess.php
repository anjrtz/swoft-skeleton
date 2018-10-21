<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Process;

use Swoft\Core\Coroutine;
use Swoft\Process\Bean\Annotation\Process;
use Swoft\Process\Process as SwoftProcess;
use Swoft\Process\ProcessInterface;

/**
 *
 * Class RegisterProcess - Custom process
 *
 * @Process(name="register", coroutine=true)
 * @package App\Process
 */
class RegisterProcess implements ProcessInterface
{
    public function run(SwoftProcess $process)
    {
        $pname = \Swoft::$server->getPname();
        $processName = "$pname myProcess process";
        $process->name($processName);

        echo sprintf("Custom child process, Coroutine-id: %s \n", Coroutine::id());
    }

    public function check(): bool
    {
        return true;
    }
}
