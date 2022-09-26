<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing Produk
    public function produk($limit, $start)
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
            'berita.jenis_berita'    => 'Produk'
        ));
        $this->db->order_by('berita.tanggal_publish', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    // Listing Produk
    public function produkBySlug($slug)
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
        $this->db->where('berita.slug_berita', $slug);
        $this->db->order_by('berita.tanggal_publish', 'DESC');
        $query = $this->db->get();
        return $query->row();
    }

    public function categoryByProduk($limit, $start)
    {
        return $this->db->query("SELECT * FROM berita WHERE jenis_berita = 'Produk' AND status_berita = 'Publish' GROUP BY id_kategori");
        // $this->db->select('*');
        // $this->db->from('berita');
        // $this->db->group_by('id_kategory');
        // $this->db->where('status_berita', 'Publish');
        // $this->db->where('jenis_berita', 'Produk');
        // $this->db->order_by('tanggal_publish', 'DESC');
        // $this->db->limit($limit, $start);
        // $query = $this->db->get();
        // return $query;
    }

    public function search($keyword, $limit, $start)
    {
        // if(!$keyword){
        //   return $this->Produk_model->produk($limit, $start);
        // }
        if($keyword == 'all'){
          return $this->Produk_model->produk($limit, $start);
        }
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
            'berita.jenis_berita'    => 'Produk'
        ));
        $this->db->like('berita.judul_berita', $keyword);
        // $this->db->or_like('berita.slug', $keyword);
        $this->db->order_by('berita.tanggal_publish', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }
}
