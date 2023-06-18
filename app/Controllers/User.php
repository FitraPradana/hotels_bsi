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

    // public function add()
    // {
    //     //
    //     $data = array(
    //         'username'          => $this->request->getPost('username'),
    //         'email'             => $this->request->getPost('email_user'),
    //         'address'           => $this->request->getPost('address'),
    //         'phone'             => $this->request->getPost('phone'),
    //         'password_hash'     => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
    //         'roles'             => $this->request->getPost('roles'),
    //         'image'             => 'default.png',
    //         'remarks_user'      => $this->request->getPost('remarks_user'),
    //         'active'            => 1,
    //     );
    //     $this->UserCIModel->insert_user($data);
    //     session()->setFlashdata('sukses', 'Data <b>' . $data['username'] . '</b> Berhasil di Simpan !');
    //     return redirect()->to('/User');
    // }

    public function update()
    {
        //
        $data = array(
            'id'                => $this->request->getPost('id_user'),
            'username'          => $this->request->getPost('username'),
            // 'email'             => $this->request->getPost('email_user'),
            'address'           => $this->request->getPost('address'),
            'phone'             => $this->request->getPost('phone'),
            'roles'             => $this->request->getPost('roles'),
            'image'             => 'default.png',
            'remarks_user'      => $this->request->getPost('remarks_user'),
            'active'            => 1,
        );
        $this->UserModel->update_User($data, $data['id']);
        session()->setFlashdata('sukses', 'Data <b>' . $data['username'] . '</b> Berhasil di Update !');
        return redirect()->to('/User');
    }
}
