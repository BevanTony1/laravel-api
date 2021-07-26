<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'text',
        'lat',
        'lng'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
