<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KamarModel;
use App\Models\TamuModel;
use App\Models\TypeKamarModel;

class Home extends BaseController
{
    public function __construct()
    {

        $this->UserModel = new UserModel();
        $this->KamarModel = new KamarModel();
        $this->TamuModel = new TamuModel();
        $this->TypeKamarModel = new TypeKamarModel();
        helper(['form', 'pagination_helper']);
    }

    public function index()
    {
        $data = [
            'title' => 'Home | PML - Document Filling',
            'usr_count' => $this->UserModel->get()->getNumRows(),
            'type_kmr_count' => $this->TypeKamarModel->get()->getNumRows(),
            'kmr_count' => $this->KamarModel->get()->getNumRows(),
            'tamu_count' => $this->TamuModel->get()->getNumRows(),
        ];

        if (userLogin()->level == 'USER') {
            return view('home/user_home', $data);
        } else if (userLogin()->level == 'ADMIN') {
            return view('home/admin_home', $data);
        }
    }
}
