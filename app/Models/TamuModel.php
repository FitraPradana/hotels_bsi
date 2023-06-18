<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{

    protected $primaryKey = 'id_tamu';
    protected $table = 'tamu';

    protected $allowedFields = ['jenis_identitas', 'no_identitas', 'nama_tamu', 'nama_tamu', 'warga_negara', 'email', 'phone', 'alamat', 'ket_tamu'];


    public function get_tamu()
    {
        return $this->db->table('tamu')
            // ->join('user', 'user.id_user = vendor.id_user', 'left outer')
            ->get()->getResultArray();
    }

    public function get_tamu_id($id)
    {
        return $this->db->table('tamu')
            ->where('id_tamu', $id)
            ->get()->getResultArray();
    }

    public function insert_tamu($data)
    {
        $query = $this->db->table('tamu')->insert($data);
        return $query;
    }

    public function update_tamu($data, $id)
    {
        $query = $this->db->table('tamu')->update($data, array('id_tamu' => $id));
        return $query;
    }

    public function delete_tamu($id)
    {
        $query = $this->db->table('tamu')->delete(array('id_tamu' => $id));
        return $query;
    }
}
