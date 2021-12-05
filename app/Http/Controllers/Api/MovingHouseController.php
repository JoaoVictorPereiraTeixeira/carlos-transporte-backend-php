<?php

namespace App\Http\Controllers\Api;

use App\Models\MovingHouse;
use App\Models\TransportItem;
use App\Services\Email;
use Illuminate\Http\Request;

require_once('../app/Libs/PHPMailer.php');
require_once('../app/Libs/SMTP.php');
require_once('../app/Libs/SMTP.php');

class MovingHouseController extends BasicCrudController
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
            'dateToCollect'=> 'required|max:255',
            'typeHousing'=> 'required|max:255',
            'hasElevator'=> 'boolean|max:255',
            'needHelper'=> 'boolean|max:255',
            'transportItems' => 'required|array'
        ];
    }

    protected function model()
    {
        return MovingHouse::class;
    }

    protected function rulesStore()
    {
        return $this->rules;
    }

    protected function rulesUpdate()
    {
        return $this->rules;
    }


    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->rulesStore());
        $obj = $this->model()::create($validatedData);

        foreach($request->transportItems as $transportItem){
            $obj->transportItems()->create($transportItem);
        }

        $email = new Email();
        $email->sendEmail("Nova solicitacao de cotacao - Mudanca de Casa",$request);

        return $obj;
    }
}
