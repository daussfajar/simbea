<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterData_BKAL_Controller extends CI_Controller
{

     public function index()
     {
          return m_view('simbe', 'admin/bkal/index');
     }
}
