<?php

namespace App\Controllers;

use App\Models\TypeKamarModel;

class TypeKamar extends BaseController
{
    public function __construct()
    {
        $this->TypeKamarModel = new TypeKamarModel();
        helper(['form', 'my_helper']);
    }

    public function index()
    {
        $data = [
            'title' => 'Data Type Kamar | Hotels',
            'TypeKamar' => $this->TypeKamarModel->get_type_kamar(),
        ];
        return view('type_kamar/data', $data);
    }

    public function add()
    {
        $data = array(
            'code_type_kamar'           => $this->request->getPost('code_type_kamar'),
            'nama_type_kamar'           => $this->request->getPost('nama_type_kamar'),
            'harga'                     => $this->request->getPost('harga'),
            'remarks_type_kamar'        => $this->request->getPost('remarks_type_kamar'),
        );
        $this->TypeKamarModel->insert_type_kamar($data);
        session()->setFlashdata('sukses', 'Data Type Kamar Code : <b>' . $data['code_type_kamar'] . '</b> Berhasil di Simpan !');
        return redirect()->to('/TypeKamar');
    }

    public function update($id)
    {
        $data = array(
            'code_type_kamar'           => $this->request->getPost('code_type_kamar'),
            'nama_type_kamar'           => $this->request->getPost('nama_type_kamar'),
            'harga'                     => $this->request->getPost('harga'),
            'remarks_type_kamar'        => $this->request->getPost('remarks_type_kamar'),
        );
        $this->TypeKamarModel->update_type_kamar($data, $id);
        session()->setFlashdata('sukses', 'Data dengan Code Type Kamar <b>' . $data['code_type_kamar'] . '</b> Berhasil di Perbaharui !');
        return redirect()->to('/TypeKamar');
    }

    public function delete($id)
    {
        // $room = $this->TypeKamarModel->find($id);
        $this->TypeKamarModel->delete_type_kamar($id);
        session()->setFlashdata('sukses', 'Data Berhasil di Hapus !');
        return redirect()->to('/TypeKamar');
    }
}
