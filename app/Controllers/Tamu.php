<?php

namespace App\Controllers;

use App\Models\TamuModel;

class Tamu extends BaseController
{
    public function __construct()
    {
        $this->TamuModel = new TamuModel();
        helper(['form', 'my_helper']);
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kamar | Hotels',
            'Tamu' => $this->TamuModel->get_tamu(),
        ];
        return view('tamu/data', $data);
    }

    public function add()
    {
        $data = array(
            'id_tamu'                   => $this->request->getPost('id_tamu'),
            'jenis_identitas'           => $this->request->getPost('jenis_identitas'),
            'no_identitas'              => $this->request->getPost('no_identitas'),
            'nama_tamu'                 => $this->request->getPost('nama_tamu'),
            'warga_negara'              => $this->request->getPost('warga_negara'),
            'email'                     => $this->request->getPost('email'),
            'phone'                     => $this->request->getPost('phone'),
            'alamat'                    => $this->request->getPost('alamat'),
            'ket_tamu'                  => $this->request->getPost('ket_tamu'),
        );
        $this->TamuModel->insert_tamu($data);
        session()->setFlashdata('sukses', 'Data Tamu : <b>' . $data['nama_tamu'] . '</b> Berhasil di Simpan !');
        return redirect()->to('/Tamu');
    }

    public function update($id)
    {
        $data = array(
            'id_tamu'                   => $this->request->getPost('id_tamu'),
            'jenis_identitas'           => $this->request->getPost('jenis_identitas'),
            'no_identitas'              => $this->request->getPost('no_identitas'),
            'nama_tamu'                 => $this->request->getPost('nama_tamu'),
            'warga_negara'              => $this->request->getPost('warga_negara'),
            'email'                     => $this->request->getPost('email'),
            'phone'                     => $this->request->getPost('phone'),
            'alamat'                    => $this->request->getPost('alamat'),
            'ket_tamu'                  => $this->request->getPost('ket_tamu'),
        );
        $this->TamuModel->update_tamu($data, $id);
        session()->setFlashdata('sukses', 'Data Berhasil di Perbaharui !');
        return redirect()->to('/Tamu');
    }

    public function delete($id)
    {
        // $room = $this->TypeKamarModel->find($id);
        $this->TamuModel->delete_tamu($id);
        session()->setFlashdata('sukses', 'Data Berhasil di Hapus !');
        return redirect()->to('/Tamu');
    }
}
