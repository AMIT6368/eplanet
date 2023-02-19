<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Superadmin extends CI_Controller {
public function __construct()
{
  parent::__construct();
  $this->load->helper('url');
  $this->load->library('MyModel_lib');
  date_default_timezone_set('Asia/Kolkata');
  error_reporting(0);
  $current_date = Date('Y-m-d');
}

public function page_not_found()
{
    $data['title']='OPPS!! Page Not Found | E-Planet';
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/pagenotfound/pagenotfond', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}
public function index()
{
    $data['title']='Login | E-Planet';
    $this->load->view('backend/superadmin/login/login', $data);
}
public function Dashboard()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Dashboard | E-Planet';
   

    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/dashboard/dashboard', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
} 
 

}?>