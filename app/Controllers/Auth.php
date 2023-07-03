<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {

        return redirect()->to('/Auth/login');
    }

    public function login()
    {
        if (empty($this->UserModel->get_user())) {
            $this->manual_add_admin();
            $this->manual_add_user();
        }

        if (session('id_user')) {
            return redirect()->to('/Home');
        }

        $data = [
            'title' => 'Login | PML - Hotels BSI',
        ];
        return view('login', $data);
    }

    public function login_proses()
    {

        $email = $this->request->getPost('email_user');
        $password = $this->request->getPost('password');
        $query = $this->db->table('user')->getWhere(['email_user' => $email]);
        $user = $query->getRow();
        // return $user->password;
        if ($user) {
            if (password_verify($password, $user->password)) {
                $params = ['id_user' => $user->id_user];
                session()->set($params);
                return redirect()->to('/Home');
            } else {
                return redirect()->back()->with('error', '<b>GAGAL : </b>Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', '<b>GAGAL : </b>Email ' . $email . ' tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to('/Auth/login');
    }

    public function manual_add_admin()
    {

        $data = [
            'username'      => 'Administrator',
            'email_user'    => 'admin@gmail.com',
            'password'      => password_hash('123', PASSWORD_BCRYPT),
            'level'         => 'ADMIN',
            'image'         => 'default.png',
        ];
        $this->UserModel->insert_user($data);
    }

    public function manual_add_user()
    {

        $data = [
            'username'      => 'User',
            'email_user'    => 'user@gmail.com',
            'password'      => password_hash('123', PASSWORD_BCRYPT),
            'level'         => 'USER',
            'image'         => 'default.png',
        ];
        $this->UserModel->insert_user($data);
    }
}
