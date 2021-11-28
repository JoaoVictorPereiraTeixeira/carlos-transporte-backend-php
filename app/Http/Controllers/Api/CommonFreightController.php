<?php

namespace App\Http\Controllers\Api;
use App\Models\CommonFreight;

class CommonFreightController extends BasicCrudController
{

    private $rules;

    public function __construct()
    {
        $this->rules = [
            'requesterName' => 'required|max:255',
            'requesterName'=> 'required|max:255',
            'requesterMainTelephone'=> 'required|max:255',
            'requesterSecondaryTelephone'=> 'required|max:255',
            'dateSolicitation'=> 'required|max:255',
            'originCep'=> 'required|max:255',
            'originCity'=> 'required|max:255',
            'originAddress'=> 'required|max:255',
            'originDistrict'=> 'required|max:255',
            'originNumber'=> 'required|max:255',
            'destinyCep'=> 'required|max:255',
            'destinyAddress'=> 'required|max:255',
            'destinyDistrict'=> 'required|max:255',
            'needHelper'=> 'boolean|required|max:255',
            'merchandiseObservations' => 'required|max:255'
        ];
    }

    protected function model()
    {
        return CommonFreight::class;
    }

    protected function rulesStore()
    {
        return $this->rules;
    }

    protected function rulesUpdate()
    {
        return $this->rules;
    }
}
