<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'hmo_id',
        'hmo_batch_id',
        'provider',
        'total',
        'encounter_date',
        'status',
        'items',
    ];

    protected $casts = [
        'items' => 'array',
        'encounter_date' => 'datetime:Y-m-d'
    ];

    public function hmo(): BelongsTo
    {
        return $this->belongsTo(Hmo::class);
    }

    public function hmoBatch(): BelongsTo
    {
        return $this->belongsTo(HmoBatch::class);
    }
}
