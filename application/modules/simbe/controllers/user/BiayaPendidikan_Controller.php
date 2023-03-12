<?php

use Illuminate\Support\Facades\Request;

defined('BASEPATH') or exit('No direct script access allowed');

class BiayaPendidikan_Controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('simbe/admin/BKAL_Model', 'm_bkal');
     }

     public function index()
     {
          $uri = $this->uri->segment(1);

          // print_r($uri);

          $data['p_mahasiswa'] = $this->m_bkal->penerima_beasiswa();

          $data['program'] = $this->db->select('*')
               ->from('sibea_program')
               ->where('status', 'N')
               ->get()
               ->result_array();

          $data['program_studi'] = $this->db->select('*')
               ->from('sibea_prodi')
               ->where('NA', 'N')
               ->get()
               ->result_array();

          return m_view('simbe', 'user/perkembangan/biaya_pendidikan', $data);
     }
}

// 2015011013