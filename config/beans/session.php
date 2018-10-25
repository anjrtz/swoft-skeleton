<?php
/**
 * Created by PhpStorm.
 * User: bekt
 * Date: 10/22/18
 * Time: 6:52 AM
 */

return [
    'sessionManager' => [
        'class' => \Swoft\Session\SessionManager::class,
        'config' => [
            'driver' => 'redis',
            'name' => 'SWOFT_SESSION_ID',
            'lifetime' => 1800,
            'expire_on_close' => false,
            'encrypt' => false,
            'storage' => '@runtime/sessions',
        ],
    ],
];