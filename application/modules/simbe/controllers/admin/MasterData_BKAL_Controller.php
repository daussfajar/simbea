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

          return m_view('simbe', 'admin/master_data/bkal_index', $data);
     }

     public function add_penerima()
     {
     }

     public function edit_penerima()
     {
          $this->$this->form_validation->set_rules('nim', 'NIM', 'trim|required|xss_clean');

          $data['e_mahasiswa'] = $this->m_bkal->edit_penerima_beasiswa();

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

          // if ($this->form_validation->run() == TRUE) {
          //      $nim = $this->uri->segment(5);

          //      $this->db->where('id', $nim);
          //      $this->db->update('sibea_mhsw', [
          //           'id' => $this->input->post('nim', true),
          //      ]);

          //      $this->session->set_flashdata('meesage', [
          //           'type' => 'success',
          //           'message' => 'Anda berhasil mengubah data!',
          //           'title' => 'Success!'
          //      ]);
          //      return m_view('simbe', 'admin/master_data/bkal_edit', $data);
          // } else {
          //      $error = [
          //           'form_error' => validation_errors_array()
          //      ];
          //      $this->session->set_flashdata('error_validation', $error);

          return m_view('simbe', 'admin/master_data/bkal_edit', $data);
          // }
     }

     public function simpan_penerima()
     {
          $this->$this->form_validation->set_rules('nama', 'nama_lengkap', 'trim|required|xss_clean');

          if ($this->form_validation->run() == TRUE) {
               $nim = $this->uri->segment(5);

               $this->db->where('id', $nim);
               $this->db->update('sibea_mhsw', [
                    'nim' => $this->input->post('id', true),
               ]);

               $this->session->set_flashdata('meesage', [
                    'type' => 'success',
                    'message' => 'Anda berhasil mengubah data!',
                    'title' => 'Success!'
               ]);
               // return m_view('simbe', 'admin/master_data/bkal_edit', $data);
               return redirect(base_url('admin/master_data/bkal'));
          } else {
               $error = [
                    'form_error' => validation_errors_array()
               ];
               $this->session->set_flashdata('error_validation', $error);

               return redirect(base_url('admin/master_data/bkal'));
          }
     }
}
