<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BasicCrudController;
use App\Models\Feedback;

class FeedbackController extends BasicCrudController
{

    private $rules;

    public function __construct()
    {
        $this->rules = [
            'avaliation' => 'required|max:255',
            'description' => 'required|max:255'
        ];
    }

    protected function model()
    {
        return Feedback::class;
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
