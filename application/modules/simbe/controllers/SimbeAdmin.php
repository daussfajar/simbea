<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SimbeAdmin extends CI_Controller
{

     public function index()
     {
          return m_view('simbe', 'layouts/master');
     }
}
