<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{

    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('agenda_model');
    }

    // Front End
    public function subscribe()
    {

        $data = [
            'email' => $this->input->post('email')
        ];
        if ($this->db->insert('email_subscribe', $data)) {
            redirect(base_url());
        }
    }
    public function pesan()
    {

        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
        ];
        if ($this->db->insert('email_pesan', $data)) {
            redirect(base_url('Kontak'));
        }
    }
}
