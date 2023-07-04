<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    protected $UserCIModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        helper(['form']);
    }


    public function index()
    {
        $data = [
            'title' => 'Data User | Hotels',
            'User' => $this->UserModel->get_user(),
        ];
        return view('user/data_user', $data);
    }

    public function add()
    {
        //
        $data = array(
            'username'          => $this->request->getPost('username'),
            'email_user'        => $this->request->getPost('email_user'),
            'password'          => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'address'           => $this->request->getPost('address'),
            'phone'             => $this->request->getPost('phone'),
            'level'             => $this->request->getPost('level'),
            'image'             => 'default.png',
            'ket_user'          => $this->request->getPost('remarks_user'),
            // 'active'            => 1,
        );
        $this->UserModel->insert_user($data);
        session()->setFlashdata('sukses', 'Data <b>' . $data['username'] . '</b> Berhasil di Simpan !');
        return redirect()->to('/User');
    }

    public function update($id)
    {
        //
        $data = array(
            'username'          => $this->request->getPost('username'),
            'email_user'        => $this->request->getPost('email_user'),
            // 'password'          => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'address'           => $this->request->getPost('address'),
            'phone'             => $this->request->getPost('phone'),
            'level'             => $this->request->getPost('level'),
            'image'             => 'default.png',
            'ket_user'          => $this->request->getPost('remarks_user'),
            // 'active'            => 1,
        );
        $this->UserModel->update_User($data, $id);
        session()->setFlashdata('sukses', 'Data <b>' . $data['username'] . '</b> Berhasil di Update !');
        return redirect()->to('/User');
    }

    public function ubah_password($id)
    {
        $users = $this->UserModel->find($id);

        $data = array(
            'password'          => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        );
        $this->UserModel->update_User($data, $id);
        session()->setFlashdata('sukses', 'Password <b>' . $users['username'] . '</b> Berhasil di Ubah !');
        return redirect()->to('/User');
    }

    public function delete($id)
    {
        // $room = $this->TypeKamarModel->find($id);
        $this->UserModel->delete_User($id);
        session()->setFlashdata('sukses', 'Data Berhasil di Hapus !');
        return redirect()->to('/User');
    }
}
