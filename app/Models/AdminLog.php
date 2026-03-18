<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class AdminLog extends Model
{
    protected $fillable = [
        "user_id",
        "username",
        "Action"
    ];
    
    public function returnTop5() {

        $this -> AdminLog::orderBy('created_at') -> take(5) -> get();        
        return $this;
    }
}
