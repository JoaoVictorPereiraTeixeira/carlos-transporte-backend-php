<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use Uuid;

    protected $fillable = [
        'avaliation',
        'description'
    ];

    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;
}
