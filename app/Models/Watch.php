<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'type',
        'user_id',
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
