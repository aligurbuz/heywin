#!/usr/bin/env php
<?php

$envFile = __DIR__.'/.env';

if(!file_exists($envFile) && isset($argv[1])){
    copy(__DIR__.'/.env.example',$envFile);
    exec('cd '.__DIR__.' && composer install && chmod -R 777 storage && php artisan key:generate && php artisan name '.$argv[1]);
}
