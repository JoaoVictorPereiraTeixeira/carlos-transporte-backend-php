<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Uuid;

class CommonFreight extends Model
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
        'needHelper',
        'merchandiseObservations'
    ];

    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;
}
