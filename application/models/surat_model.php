<?php

defined('BASEPATH') or exit('No direct script access allowed');

class surat_model extends CI_Model
{

    public function getAllsurat()
    {
        // $query digunakan untuk menampung isi dari tabel surat
        $query = $this->db->get('surat');
        // untuk menampilkan isi dari query
        return $query->result_array();

        // return $this->db->get('surat')->result_array();
    }
    public function tambahdatasrt()
    {
        $data = [
            "nomer_surat" => $this->input->post('nomer_surat', true),
            "nama" => $this->input->post('nama', true),
            "hal" => $this->input->post('hal', true),
            "lampiran" => $this->input->post('lampiran', true),
            "gambar" => $this->input->post('gambar', true),
            "tp" => $this->input->post('tp', true)
        ];
        $this->db->insert('surat', $data);

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        $data = array('gambar' => $this->upload->data());
        $data['nomer_surat'] = $this->input->post('nomer_surat');
        $data['nama'] = $this->input->post('nama');
        $data['hal'] = $this->input->post('hal');
        $data['lampiran'] = $this->input->post('lampiran');
        $data['tp'] = $this->input->post('tp');
        $data['gambar'] = $file_encode;
        $this->db->where('id_srt', $this->input->post('id'));
        $this->db->update('Surat', $data);
        unlink($image_data['full_path']);
    }


    public function hapusdatasrt($id)
    {
        $this->db->where('id_srt', $id);
        $this->db->delete('surat');
    }
    public function getsuratByID($id)
    {
        return $this->db->get_where('surat', ['id_srt' => $id])->row_array();
    }
    public function ubahdatasrt()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        $data = array('gambar' => $this->upload->data());
        $data['nomer_surat'] = $this->input->post('nomer_surat');
        $data['nama'] = $this->input->post('nama');
        $data['hal'] = $this->input->post('hal');
        $data['lampiran'] = $this->input->post('lampiran');
        $data['tp'] = $this->input->post('tp');
        $data['gambar'] = $file_encode;
        $this->db->where('id_srt', $this->input->post('id'));
        $this->db->update('Surat', $data);
        unlink($image_data['full_path']);
    }
    public function cariDataSurat()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nomer_surat', $keyword);
        return $this->db->get('surat')->result_array();
    }

    public function datatabels()
    {
        $query = $this->db->order_by('id_srt', 'DESC')->get('surat');
        return $query->result();
        // $query = $this->db->order_by('id_barang', 'ASC')->get('nama');
        // return $query->result();
    }
}

/* End of file surat_model.php */
