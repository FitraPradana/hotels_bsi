<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{

    protected $primaryKey = 'id_kamar';
    protected $table = 'kamar';

    protected $allowedFields = ['id_type_kamar', 'kamar', 'max_dewasa', 'max_anak', 'remarks_kamar', 'status_kamar'];


    public function get_kamar()
    {
        return $this->db->table('kamar')
            ->join('type_kamar', 'type_kamar.id_type_kamar = kamar.id_type_kamar', 'left outer')
            ->get()->getResultArray();
    }

    public function get_kamar_id($id)
    {
        return $this->db->table('kamar')
            ->join('type_kamar', 'type_kamar.id_type_kamar = kamar.id_type_kamar', 'left outer')
            ->where('id_kamar', $id)
            ->get()->getResultArray();
    }

    public function get_kamar_tersedia()
    {
        return $this->db->table('kamar')
            ->join('type_kamar', 'type_kamar.id_type_kamar = kamar.id_type_kamar', 'left outer')
            ->where('status_kamar', 'TERSEDIA')
            ->get()->getResultArray();
    }

    public function insert_kamar($data)
    {
        $query = $this->db->table('kamar')->insert($data);
        return $query;
    }

    public function update_kamar($data, $id)
    {
        $query = $this->db->table('kamar')->update($data, array('id_kamar' => $id));
        return $query;
    }

    public function delete_kamar($id)
    {
        $query = $this->db->table('kamar')->delete(array('id_kamar' => $id));
        return $query;
    }
}
