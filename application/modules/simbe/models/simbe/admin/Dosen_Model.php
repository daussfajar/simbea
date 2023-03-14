<?php

defined('BASEPATH') or exit('Access Blocked');

class Dosen_Model extends CI_Model
{

     public function __construct()
     {
          parent::__construct();
     }

     public function penerima_mahasiswa()
     {
          $status = 'Aktif';
          $this->db->select('
          m.*,
          m.status,
          pd.nama as nama_prodi,
          pg.nama as nama_program,
          ');
          $this->db->from('sibea_mhsw as m');
          $this->db->join('sibea_prodi as pd', 'm.prodi_id = pd.prodi_id');
          $this->db->join('sibea_program as pg', 'm.program_id = pg.program_id');
          // $this->db->where('na', 'N');
          $this->db->where('m.status', $status);

          return $this->db->get()->result();
     }

     public function transac_approval()
     {
          $this->db->select('
               t.*,
               m.status as status_mahasiswa,
               t.app_dosen as status_dosen,
          ');
          $this->db->from('sibea_transac_approval as t');
          $this->db->join('sibea_mhsw as m', 't.approval_id = m.approval_id');
          $this->db->where('t.na', 'N');

          return $this->db->get()->result();
     }
}
