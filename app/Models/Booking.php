<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';
    protected $fillable = [
        'customer_name','email','phone_number','event_catalog','event_category','description','member','address','status','customer_id','eventtype_id'
    ];
}
