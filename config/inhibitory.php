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
        'customer/balances' => ['GET','POST','PUT'],
        'store/drawTickets' => ['GET','PUT','POST'],
        'logout' => ['POST'],
    ]
];
