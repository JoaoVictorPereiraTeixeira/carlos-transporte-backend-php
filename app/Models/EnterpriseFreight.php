<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class EnterpriseFreight extends Model
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
        'weight',
        'cnpjSender',
        'cnpjRecipient',
        'quantityItems',
        'collectObservations',
        'merchandiseObservations',
        'paidAtOrigin',
        'dateToCollect'
    ];

    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;
}
