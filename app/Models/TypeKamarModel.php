<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeKamarModel extends Model
{

    protected $primaryKey = 'id_type_kamar';
    protected $table = 'type_kamar';

    protected $allowedFields = ['code_type_kamar', 'nama_type_kamar', 'harga', 'remarks_type_kamar'];


    public function get_type_kamar()
    {
        return $this->db->table('type_kamar')
            // ->join('user', 'user.id_user = vendor.id_user', 'left outer')
            ->get()->getResultArray();
    }

    public function get_type_kamar_id($id)
    {
        return $this->db->table('type_kamar')
            ->where('id_type_kamar', $id)
            ->get()->getResultArray();
    }

    public function insert_type_kamar($data)
    {
        $query = $this->db->table('type_kamar')->insert($data);
        return $query;
    }

    public function update_type_kamar($data, $id)
    {
        $query = $this->db->table('type_kamar')->update($data, array('id_type_kamar' => $id));
        return $query;
    }

    public function delete_type_kamar($id)
    {
        $query = $this->db->table('type_kamar')->delete(array('id_type_kamar' => $id));
        return $query;
    }
}
