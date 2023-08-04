<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'katalog_id',
        'count',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function katalog()
    {
        return $this->belongsTo(Katalog::class);
    }
}
