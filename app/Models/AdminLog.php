<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class AdminLog extends Model
{
    protected $fillable = [
        "user_id",
        "username",
        "Action",
        "Description"
    ];
    

}
