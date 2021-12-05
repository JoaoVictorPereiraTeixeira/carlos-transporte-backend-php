<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class TransportItem extends Model
{
    use Uuid;

    protected $fillable = [
        'item',
        'quantity',
        'moving_house_id'
    ];

    protected $casts = [
        'id' => 'string',
        'item' => 'string',
        'quantity' => 'number'
    ];

    public function movingHouse(){
        return $this->belongsTo(MovingHouse::class);
    }

    public $incrementing = false;
}
