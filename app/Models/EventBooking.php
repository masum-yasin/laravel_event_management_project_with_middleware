<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name','email','phone','event_catalog','description','member','event_category'
    ];
}
