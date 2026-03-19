<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnedItem extends Model
{
    protected $fillable = [
        'item_id',
        'order_id',
        'user_id',
        'reason',
    ];

}
