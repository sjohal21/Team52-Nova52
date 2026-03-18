<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class AdminLog extends Model
{
    protected $table = 'adminlog';
    protected $fillable = [
        "user_id",
        "name",
        "action"
    ];
    
    public function returnTop5() {
        
        return AdminLog::orderBy('created_at', 'action') -> take(5) -> get();
    }
}
