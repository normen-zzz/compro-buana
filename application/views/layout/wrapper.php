<?php defined('BASEPATH') or exit('No direct script access allowed');

// if (!$this->ion_auth->logged_in()) {
// 	// redirect them to the login page
// 	redirect('auth/login', 'refresh');
// }

// Load kunjungan
$alsite             = current_url();
$alamat_kunjungan     = str_replace('index.php/', '', $alsite);
$this->kunjungan->counter($alamat_kunjungan);

require_once('head2.php');
require_once('navbar.php');
// require_once('menu.php');
require_once('konten.php');
require_once('footer2.php');
