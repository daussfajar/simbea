<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beasiswa_Keuangan_Controller extends CI_Controller
{

     public function index()
     {
          return m_view('simbe', 'admin/dashboard');
     }
}
