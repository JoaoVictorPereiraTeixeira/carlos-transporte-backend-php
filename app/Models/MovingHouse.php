<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class MovingHouse extends Model
{
    use Uuid;

    protected $fillable = [
        'requesterName',
        'requesterMainTelephone',
        'requesterSecondaryTelephone',
        'dateSolicitation',
        'originCep',
        'originCity',
        'originAddress',
        'originDistrict',
        'originNumber',
        'destinyCep',
        'destinyAddress',
        'destinyDistrict',
        'typeHousing',
        'hasElevator',
        'needHelper',
        'dateToCollect'
    ];

    protected $casts = [
        'id' => 'string'
    ];

    public function transportItems(){
        return $this->hasMany(TransportItem::class);
    }

    public $incrementing = false;
}
