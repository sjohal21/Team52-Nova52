<?php

namespace App\Models;

 //  *********** Import Required Classes ***********
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\orderitems;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'First_Name',
        'Surname',
        'Email_Address',
        'Phone_Number',
        'Address_Line_1',
        'Address_Line_2',
        'City',
        'Postcode',
        'Select_Country',
        'status',
        'total_price',
    ];

    // Relationships
    // Belongs to User via user_id
    public function user(){
        return $this->belongsTo(User::class);
    }
    // has many orderitems via order_id
    public function orderitems(){
        return $this->hasMany(Orderitems::class);
    }
}
