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
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='OPPS!! Page Not Found | E-Planet';
    if($this->session->userdata('user_type') == 'Superadmin'){
      $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
      $this->load->view('backend/superadmin/layout/header', $data);
      $this->load->view('backend/superadmin/layout/sidebar', $data);
      $this->load->view('backend/superadmin/layout/sidebartop', $data);
      $this->load->view('backend/superadmin/pagenotfound/pagenotfound', $data);
      $this->load->view('backend/superadmin/layout/footer', $data);

    }else if($this->session->userdata('user_type') == 'User'){


    }else{


    }
}
public function index()
{
    $data['title']='Login | E-Planet';
    $this->load->view('backend/superadmin/login/login', $data);
}
public function Dashboard()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Dashboard | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/dashboard/dashboard', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
} 

public function ActiveUser()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Active Users List | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/user/active_user_list', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function DeactiveUser()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Deactive Users List | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/user/deactive_user_list', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
} 

public function AdminProfile()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Deactive Users List | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/user/deactive_user_list', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

/// Menu 
public function MenuList()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Menu List | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['menu_list']=$this->Superadmin_model->GetAllResultOrderBy('footer_menu','fm_order','ASC');
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/menu/menu_list', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}
public function MenuAdd()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Menu Add | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/menu/add_menu', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function MenuAddProcess()
{
   $successstatus=$this->Superadmin_model->MenuAddProcess($user_id);
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Added Menu');
echo json_encode($data);    
}

public function MenuEdit($slug)
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Menu Add | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['menudetail']=$this->Superadmin_model->GetAllRowWhere('footer_menu',array('fm_slug'=>$slug));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/menu/edit_menu', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function MenuEditProcess()
{
   $successstatus=$this->Superadmin_model->MenuEditProcess($user_id);
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Update Menu');
echo json_encode($data);    
}

public function MenuChangeStatus()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$dataarray =  array(
'fm_status'=> $this->input->post("fm_status"),
);
$this->Home_model->updatedata('footer_menu',array('fm_slug'=>$this->input->post("fm_slug")),$dataarray);
$data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Change Menu');
echo json_encode($data);
}

public function MenuDelete()
{if($this->session->userdata('user_id')=='') {redirect('Login');}

$successstatus=$this->Superadmin_model->MenuDelete($user_id);
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Deleted Menu');
echo json_encode($data);

}

// Slider 

}?>