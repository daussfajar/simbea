<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterData_Dosen_Controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('simbe/admin/Dosen_Model', 'm_dosen');
     }

     public function index()
     {

          // $data['p_mahasiswa'] = $this->m_dosen->penerima_beasiswa();
          // $data['na_mahasiswa'] = $this->m_dosen->na_beasiswa();
          $data['penerima'] = $this->m_dosen->penerima_mahasiswa();
          $data['d_approval'] = $this->m_dosen->transac_approval();

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

          $data['status'] = $this->db->select('*')
               ->from('sibea_status')
               ->where('status', 'N')
               ->get()
               ->result_array();

          return m_view('simbe', 'admin/master_data/dosenpa_index', $data);
     }
}
