<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterData_Warek_Controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('simbe/admin/Warek_Model', 'm_warek');
     }

     public function index()
     {
          $data['p_mahasiswa'] = $this->m_warek->penerima_beasiswa();

          return m_view('simbe', 'admin/master_data/warek_index', $data);
     }

     public function add_penerima()
     {
     }
}
