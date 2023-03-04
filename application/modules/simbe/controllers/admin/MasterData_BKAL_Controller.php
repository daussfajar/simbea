<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterData_BKAL_Controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('simbe/admin/BKAL_Model', 'm_bkal');
     }

     public function index()
     {

          $data['p_mahasiswa'] = $this->m_bkal->penerima_beasiswa();

          return m_view('simbe', 'admin/master_data/index', $data);
     }
}
