<?php

namespace App\Facades\Database\Draw;

use App\Libs\AppContainer;
use App\Repositories\Repository;
use App\Repositories\Resources\Store\DrawsRepository;

class Draw
{
    public static function get(int $drawCode): DrawsRepository
    {
        return AppContainer::use('draw_' . $drawCode, function () use ($drawCode) {
            return Repository::draw()->code($drawCode);
        });
    }

    public static function isValid(int $drawCode): bool
    {
        return true;
    }

    /**
     * @param int $drawCode
     * @return object|array
     */
    public static function decreaseStock(int $drawCode): object|array
    {
        $draw = static::get($drawCode);
        $entity = $draw->entity();

        if($entity->remaining_stock>0){
            return $draw->decrease('remaining_stock');
        }

        return [];
    }
}
