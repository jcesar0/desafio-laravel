<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    public $timestamps = true;

    protected $fillable = [
        'name', 'color', 'identical_plate', 'brand', 'year', 'state', 'city'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
