<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // ...    


    protected $primaryKey = 'id_user';
    protected $table = 'user';
    protected $returnType = 'array';
    protected $allowedFields = ['username', 'email_user', 'password', 'level', 'ket_user', 'created_at', 'updated_at', 'deleted_at'];


    protected $useTimestamps = true;
    protected $useSoftDeletes = false;

    // protected $db;
    // public function __construct()
    // {
    //     $this->db = db_connect();
    // }



    // public function get_anggota_id($id)
    // {
    //     return $this->db->table('anggota')
    //         ->where('anggota.id_anggota', $id)
    //         ->get()->getResultArray();
    // }


    public function get_user()
    {
        return $this->db->table('user')->get()->getResultArray();
    }

    public function cek_email($email)
    {
        return $this->db->table('user')
            ->where('email_user', $email)
            ->get()->getRow();
    }

    public function insert_user($data)
    {
        $query = $this->db->table('user')->insert($data);
        return $query;
    }

    public function update_User($data, $id)
    {
        $query = $this->db->table('user')->update($data, array('id_user' => $id));
        return $query;
    }

    public function delete_User($id)
    {
        $query = $this->db->table('user')->delete(array('id_user' => $id));
        return $query;
    }
}
