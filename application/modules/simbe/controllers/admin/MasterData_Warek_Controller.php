<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterData_Warek_Controller extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('simbe/admin/BKAL_Model', 'm_bkal');
     }

     public function index()
     {

          return m_view('simbe', 'admin/master_data/warek_index');
     }

     public function add_penerima()
     {
     }
}
