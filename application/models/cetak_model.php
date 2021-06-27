<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model extends CI_Model
{

    public function view()
    {
        $this->db->select('nomer_surat,nama,hal,lampiram,gambar,tp');
        $query = $this->db->get('surat');
        return $query->result();
    }
}
