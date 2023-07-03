<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\TamuModel;
use App\Models\CheckInModel;
use CodeIgniter\I18n\Time;

class Reservation extends BaseController
{
    public function __construct()
    {
        $this->KamarModel = new KamarModel();
        $this->TamuModel = new TamuModel();
        $this->CheckInModel = new CheckInModel();
        helper(['form', 'my_helper']);
    }

    public function index()
    {
        $today = Time::now();
        $data = [
            'title' => 'Data Reservation | Hotels',
            'Kamar_Tesedia' => $this->KamarModel->get_kamar_tersedia(),
            'Today' => $today,
        ];
        return view('reservation/index', $data);
    }

    public function trans_checkin($id_kamar)
    {
        $today = Time::now();
        $data = [
            'title' => 'Transaction Reservation | Hotels',
            'Kamar_ID' => $this->KamarModel->get_kamar_id($id_kamar),
            'Tamu' => $this->TamuModel->get_tamu(),
            'Invoice' => $this->CheckInModel->invoice(),
            'Today' => $today,
        ];
        return view('reservation/trans_checkin', $data);
    }

    public function save_checkin()
    {
        $data = array(
            'invoice'                   => $this->request->getPost('invoice'),
            'tgl_checkin'               => $this->request->getPost('tgl_checkin'),
            'tgl_checkout'              => $this->request->getPost('tgl_checkout'),
            'jml_tamu_dewasa'           => $this->request->getPost('jml_tamu_dewasa'),
            'jml_tamu_anak'             => $this->request->getPost('jml_tamu_anak'),
            'remarks_checkin'           => $this->request->getPost('remarks_checkin'),
            'id_kamar'                  => $this->request->getPost('id_kamar'),
            'id_tamu'                   => $this->request->getPost('id_tamu'),
            'status'                   => 'CHECKIN',
        );
        $this->CheckInModel->insert_checkin($data);


        $findKamar = $this->KamarModel->find($data['id_kamar']);
        $dataKamar = array(
            'status_kamar' => 'TERPAKAI',
        );
        $this->KamarModel->update_kamar($dataKamar, $findKamar['id_kamar']);

        session()->setFlashdata('sukses', 'Data Check In : <b>' . $data['invoice'] . '</b> Berhasil di Simpan !');
        return redirect()->to('/Checkin');
    }
}
