<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class EventSpeaker extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id','speaker_name','image','phone','email','facebook','twitter','title',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
