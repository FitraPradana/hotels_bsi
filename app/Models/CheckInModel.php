<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckInModel extends Model
{

    protected $primaryKey = 'id_checkin';
    protected $table = 'checkin';

    protected $allowedFields = ['invoice', 'tgl_checkin', 'tgl_checkout', 'jml_tamu_dewasa', 'jml_tamu_anak', 'remarks_checkin', 'id_checkin', 'id_tamu'];


    public function get_checkin()
    {
        return $this->db->table('checkin')
            ->join('kamar', 'kamar.id_kamar = checkin.id_kamar', 'left outer')
            ->join('tamu', 'tamu.id_tamu = checkin.id_tamu', 'left outer')
            ->join('type_kamar', 'type_kamar.id_type_kamar = kamar.id_type_kamar')
            ->get()->getResultArray();
    }

    public function insert_checkin($data)
    {
        $query = $this->db->table('checkin')->insert($data);
        return $query;
    }

    public function invoice()
    {
        $sql = "SELECT MAX(MID(invoice,4,4)) AS kode
                from checkin";
        // -- where MID(kode_pinjaman,5,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if ($query->getNumRows() > 0) {
            $row = $query->getRow();
            $n = ((int)$row->kode) + 1;
            $no = sprintf("%'.04d", $n);
        } else {

            $no = "0001";
        }
        $kode = "INV" . $no;
        return $kode;
    }
}
