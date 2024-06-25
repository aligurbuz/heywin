<?php

return [
    'web' => [
        'login' => ['POST'],
        'countries/*' => ['GET'],
        'currencies/*' => ['GET'],
        'customer/profiles' => ['POST'],
        'global' => ['GET','POST'],
        'store/draws' => ['GET'],
        //'timezones' => ['GET'],
    ],
    'authenticateWeb' => [
        'customer/profiles' => ['GET','PUT'],
        'customer/referers' => ['GET','PUT','POST'],
        'customer/balances' => ['GET','POST','PUT'],
        'payment/types' => ['GET'],
        'store/drawTickets' => ['GET','PUT','POST'],
        'logout' => ['POST'],
    ]
];
