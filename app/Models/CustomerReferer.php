<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $customer_friend_code
 */
class CustomerReferer extends Model
{
    use HasFactory, BaseManager;

    protected array $searchable = [];

    protected array $withQuery = [];

    protected $hidden = ['id'];

    protected $appends = ['customer_friend'];

    public function getCustomerFriendAttribute()
    {
        return Repository::customer()->instance(false)
            ->select(['name','email'])->where('customer_code', $this->customer_friend_code)->get();
    }
}
