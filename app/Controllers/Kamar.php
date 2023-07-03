<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\TypeKamarModel;

class Kamar extends BaseController
{
    public function __construct()
    {
        $this->KamarModel = new KamarModel();
        $this->TypeKamarModel = new TypeKamarModel();
        helper(['form', 'my_helper']);
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kamar | Hotels',
            'Kamar' => $this->KamarModel->get_kamar(),
            'TypeKamar' => $this->TypeKamarModel->get_type_kamar(),
        ];
        return view('kamar/data', $data);
    }

    public function add()
    {
        $data = array(
            'id_type_kamar'             => $this->request->getPost('id_type_kamar'),
            'kamar'                     => $this->request->getPost('kamar'),
            'max_dewasa'                => $this->request->getPost('max_dewasa'),
            'max_anak'                  => $this->request->getPost('max_anak'),
            'remarks_kamar'             => $this->request->getPost('remarks_kamar'),
        );
        $this->KamarModel->insert_kamar($data);
        session()->setFlashdata('sukses', 'Data Kamar : <b>' . $data['kamar'] . '</b> Berhasil di Simpan !');
        return redirect()->to('/Kamar');
    }

    public function update($id)
    {
        $data = array(
            // 'id_type_kamar'             => $this->request->getPost('id_type_kamar'),
            'kamar'                     => $this->request->getPost('kamar'),
            'max_dewasa'                => $this->request->getPost('max_dewasa'),
            'max_anak'                  => $this->request->getPost('max_anak'),
            'remarks_kamar'             => $this->request->getPost('remarks_kamar'),
        );
        $this->KamarModel->update_kamar($data, $id);
        session()->setFlashdata('sukses', 'Data Berhasil di Perbaharui !');
        return redirect()->to('/Kamar');
    }

    public function delete($id)
    {
        // $room = $this->TypeKamarModel->find($id);
        $this->KamarModel->delete_kamar($id);
        session()->setFlashdata('sukses', 'Data Berhasil di Hapus !');
        return redirect()->to('/Kamar');
    }
}
