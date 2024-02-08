<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name','address','logo','descripation','email'
    ];
}
