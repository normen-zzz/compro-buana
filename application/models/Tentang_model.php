<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing Tentang
    public function tentang($limit, $start)
    {
        $this->db->select('berita.*, 
					users.nama, 
					kategori.nama_kategori, kategori.slug_kategori,
					kategori.slug_kategori
					');
        $this->db->from('berita');
        // Join dg 2 tabel
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'LEFT');
        $this->db->join('users', 'users.id_user = berita.id_user', 'LEFT');
        // End join
        $this->db->where(array(
            'berita.status_berita'    => 'Publish',
            'berita.jenis_berita'    => 'Profil'
        ));
        $this->db->order_by('berita.tanggal_publish', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->row();
    }
}
