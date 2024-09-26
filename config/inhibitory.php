<?php

return [
    'web' => [
        'login' => ['POST'],
        'countries/*' => ['GET'],
        'currencies/*' => ['GET'],
        'customer/profiles' => ['POST'],
        'front/langs' => ['GET'],
        'global' => ['GET','POST'],
        'store/draws' => ['GET'],
        'store/categories' => ['GET'],
        'store/drawCountries' => ['GET'],
        'store/productCategories' => ['GET'],
        'store/productCurrencies' => ['GET'],
        'store/products' => ['GET'],
        //'timezones' => ['GET'],
    ],
    'authenticateWeb' => [
        'customer/profiles' => ['GET','PUT'],
        'customer/referers' => ['GET','PUT','POST'],
        'customer/balances' => ['GET','POST','PUT'],
        'customer/contacts' => ['GET','POST','PUT'],
        'customer/images' => ['GET','POST','PUT'],
        'customer/payments' => ['GET','POST','PUT'],
        'payment/types' => ['GET'],
        'store/drawTickets' => ['GET','PUT','POST'],
        'logout' => ['POST'],
    ]
];
