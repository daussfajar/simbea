<?php

use Illuminate\Support\Facades\Request;

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
          $data['na_mahasiswa'] = $this->m_bkal->na_beasiswa();

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

          return m_view('simbe', 'admin/master_data/bkal_index', $data);
     }

     public function tambah_penerima()
     {

          $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');

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

          return m_view('simbe', 'admin/master_data/bkal_add', $data);
     }

     public function simpan_tambah_penerima()
     {
          $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');

          if ($this->form_validation->run() == TRUE) {
               $nim = $this->uri->segment(5);

               $data_mhsw = [
                    'id' => $this->input->post('nim', true),
                    'nama' => $this->input->post('nama_lengkap', true),
                    'program_id' => $this->input->post('program', true),
                    'prodi_id' => $this->input->post('prodi', true),
                    'tempat_lahir' => $this->input->post('tempat_lahir', true),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                    'status' => $this->input->post('status', true),

                    'alamat' => $this->input->post('alamat', true),
               ];

               $data_approval = [
                    'nim' => $this->input->post('nim', true),
               ];


               // $this->db->where('id', $nim);
               $this->db->insert('sibea_mhsw', $data_mhsw);
               $this->db->insert('sibea_transac_approval', $data_approval);

               $this->session->set_flashdata('message', [
                    'type' => 'success',
                    'message' => 'Anda berhasil mengubah data!',
                    'title' => 'Success!'
               ]);

               return redirect(base_url('admin/master_data/bkal'));
          } else {
               $error = [
                    'form_error' => validation_errors_array()
               ];
               $this->session->set_flashdata('error_validation', $error);

               return redirect(base_url('admin/master_data/bkal/add'));
          }
     }



     public function simpan_penerima()
     {
          // $this->form_validation->set_rules('nim', 'NIM', 'trim|required|xss_clean');
          $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');

          if ($this->form_validation->run() == TRUE) {
               $nim = $this->uri->segment(5);

               $data_mhsw = [
                    'id' => $this->input->post('nim', true),
                    'nama' => $this->input->post('nama_lengkap', true),
                    'program_id' => $this->input->post('program', true),
                    'prodi_id' => $this->input->post('prodi', true),
                    'tempat_lahir' => $this->input->post('tempat_lahir', true),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                    'status' => $this->input->post('status', true),

                    'alamat' => $this->input->post('alamat', true),
               ];


               $data_approval = [
                    'nim' => $this->input->post('nim', true),
               ];

               $this->db->where('id', $nim);
               $this->db->update('sibea_mhsw', $data_mhsw);
               $this->db->update('sibea_transac_approval', $data_approval);

               $this->session->set_flashdata('message', [
                    'type' => 'success',
                    'message' => 'Anda berhasil mengubah data!',
                    'title' => 'Success!'
               ]);

               return redirect(base_url('admin/master_data/bkal'));
          } else {
               $error = [
                    'form_error' => validation_errors_array()
               ];
               $this->session->set_flashdata('error_validation', $error);

               return redirect(base_url('admin/master_data/bkal'));
          }
     }

     public function ubah_penerima(string $nim)
     {

          // $this->form_validation->set_rules('nim', 'NIM', 'trim|required|xss_clean');
          $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');


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

          if ($this->form_validation->run() == TRUE) {
               $nim = $this->uri->segment(5);

               $this->db->where('id', $nim);
               $this->db->update('sibea_mhsw', [
                    // 'nama_di_database' => $this->input->post('nama_di_form', true),
                    'id' => $this->input->post('nim', true),
                    'nama' => $this->input->post('nama_lengkap', true),
                    'program_id' => $this->input->post('program', true),
                    'prodi_id' => $this->input->post('prodi', true),
                    'tempat_lahir' => $this->input->post('tempat_lahir', true),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                    'status' => $this->input->post('status', true),

                    'alamat' => $this->input->post('alamat', true),
               ]);

               $this->session->set_flashdata('message', [
                    'type' => 'success',
                    'message' => 'Anda berhasil mengubah data!',
                    'title' => 'Success!'
               ]);
               return m_view('simbe', 'admin/master_data/bkal_edit', $data);
          } else {
               $error = [
                    'form_error' => validation_errors_array()
               ];
               $this->session->set_flashdata('error_validation', $error);

               return m_view('simbe', 'admin/master_data/bkal_edit', $data);
          }
     }
}

// 2015011013