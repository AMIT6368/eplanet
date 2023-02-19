<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Home extends CI_Controller {
public function __construct()
{
 parent::__construct();
 $this->load->helper('url');
 $this->load->library('MyModel_lib');
 date_default_timezone_set('Asia/Kolkata');
 error_reporting(0);
}
public function page_not_found()
{
  $data['title'] = 'Opps Page Not Found | E-Planet'; 
  $this->load->view('frontend/page_not_found', $data); 
}

public function index()
{
$data['title']='Login | E-Planet';
$this->load->view('loginauth/login', $data); 
}

public function UDashboard()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Dashboard | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/dashboard', $data);    
$this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}

public function UWallet()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Wallet | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/wallet', $data);    
$this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}

public function UNotification() 
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Notification | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/Notification', $data);    
// $this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}

public function UCategory() 
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Notification | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/category/categorylist.php', $data);    
// $this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}

public function USubCategory() 
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Notification | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/subcategory/subcategorylist.php', $data);    
// $this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}

public function UCatSubCategoryDetail() 
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Notification | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/cat_subcat_detail/cat_subcategory_detail.php', $data);    
// $this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}

public function UCatSubCategoryDetail_1() 
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Notification | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/cat_subcat_detail/cat_subcategory_detail1.php', $data);    
// $this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}
public function UCatSubCategoryDetail_2() 
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Notification | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/cat_subcat_detail/cat_subcategory_detail2.php', $data);    
// $this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}
public function UCatSubCategoryDetail_3() 
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$data['title'] = 'Notification | E-Planet'; 
$data['userdata'] =$this->Home_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
$this->load->view('frontend/layout/header', $data);
$this->load->view('frontend/layout/sidebar', $data);
$this->load->view('frontend/cat_subcat_detail/cat_subcategory_detail3.php', $data);    
// $this->load->view('frontend/layout/footermenu', $data); 
$this->load->view('frontend/layout/footer', $data); 
}


}?>