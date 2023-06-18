<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\CheckInModel;

class Checkin extends BaseController
{
    public function __construct()
    {
        $this->CheckInModel = new CheckInModel();
        helper(['form', 'my_helper']);
    }

    public function index()
    {
        $data = [
            'title' => 'Data Check In | Hotels',
            'CheckIn' => $this->CheckInModel->get_checkin(),
        ];
        return view('checkin/data', $data);
    }
}
