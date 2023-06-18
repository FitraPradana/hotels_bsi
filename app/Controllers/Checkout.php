<?php

namespace App\Controllers;

use App\Models\CheckOutModel;
use App\Models\CheckInModel;
use App\Models\KamarModel;
use CodeIgniter\I18n\Time;

class Checkout extends BaseController
{
    public function __construct()
    {
        $this->CheckInModel = new CheckInModel();
        $this->CheckOutModel = new CheckOutModel();
        $this->KamarModel = new KamarModel();
        helper(['form', 'my_helper']);
    }

    public function index()
    {
        $today = Time::now();
        $data = [
            'title' => 'Data Check Out | Hotels',
            'CheckOut' => $this->CheckOutModel->get_checkout(),
            'Today' => $today,
        ];
        return view('checkout/data', $data);
    }

    public function trans_checkout($id)
    {
        $today = Time::now();

        $findCheckin = $this->CheckInModel->find($id);
        //
        $data = array(
            'tgl_checkout'                      => $today,
            'id_checkin'                        => $id,
            'remarks_checkout'                  => 'Checkout per tgl ' . $today . ' ',
        );
        $this->CheckOutModel->insert_checkout($data);


        $findKamar = $this->KamarModel->find($findCheckin['id_kamar']);
        $dataKamar = array(
            'status_kamar' => 'TERSEDIA',
        );
        $this->KamarModel->update_kamar($dataKamar, $findKamar['id_kamar']);

        session()->setFlashdata('sukses', 'Data Check In : <b>' . $findCheckin['invoice'] . '</b> Berhasil Checkout !');
        return redirect()->to('/Checkout');
    }
}
