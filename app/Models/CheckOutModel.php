<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckOutModel extends Model
{

    protected $primaryKey = 'id_checkout ';
    protected $table = 'checkout';

    protected $allowedFields = ['kode_checkout', 'tgl_checkout', 'id_checkout', 'remarks_checkout'];


    public function get_checkout()
    {
        return $this->db->table('checkout')
            ->join('checkin', 'checkin.id_checkin = checkout.id_checkin', 'left outer')
            ->join('kamar', 'kamar.id_kamar = checkin.id_kamar', 'left outer')
            ->join('tamu', 'tamu.id_tamu = checkin.id_tamu', 'left outer')
            ->join('type_kamar', 'type_kamar.id_type_kamar = kamar.id_type_kamar')
            ->get()->getResultArray();
    }

    public function insert_checkout($data)
    {
        $query = $this->db->table('checkout')->insert($data);
        return $query;
    }

    public function kode_checout_otomatis()
    {
        $sql = "SELECT MAX(MID(invoice,8,4)) AS kode
                from checkout";
        // -- where MID(kode_pinjaman,5,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if ($query->getNumRows() > 0) {
            $row = $query->getRow();
            $n = ((int)$row->kode) + 1;
            $no = sprintf("%'.08d", $n);
        } else {
            $no = "0001";
        }
        $kode = "CHCKOUT" . $no;
        return $kode;
    }
}
