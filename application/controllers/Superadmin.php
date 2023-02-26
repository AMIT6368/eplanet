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
   $successstatus=$this->Superadmin_model->MenuAddProcess();
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
   $successstatus=$this->Superadmin_model->MenuEditProcess();
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
// =================================Category=================================//
public function CategoryList()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Category List | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['category_list']=$this->Superadmin_model->GetAllResultOrderByWhere('category','cat_sequence','ASC',array('cat_delete'=>'No'));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/category/category_list', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}
public function CategoryAdd()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Category Add | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/category/add_category', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function CategoryAddProcess()
{
   $successstatus=$this->Superadmin_model->CategoryAddProcess();
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Added Menu');
echo json_encode($data);    
}

public function CategoryEdit($slug)
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Category Update | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['datadetail']=$this->Superadmin_model->GetAllRowWhere('category',array('cat_slug'=>$slug));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/category/edit_category', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function CategoryEditProcess()
{
   $successstatus=$this->Superadmin_model->CategoryEditProcess();
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Update Category');
echo json_encode($data);    
}

public function CategoryChangeStatus()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$dataarray =  array(
'cat_status'=> $this->input->post("cat_status"),
);
$this->Home_model->updatedata('category',array('cat_slug'=>$this->input->post("cat_slug")),$dataarray);
$data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Change Category');
echo json_encode($data);
}

public function CategoryDelete()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$dataarray =  array(
'cat_delete'=> 'Yes',
);
$successstatus=$this->Superadmin_model->updatedata('category',array('cat_slug'=>$this->input->post("cat_slug")),$dataarray);
$data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Deleted Category');
echo json_encode($data);

} 

// =================================SubCategory=================================//
public function SubCategoryList()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='SubCategory List | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['data_list']=$this->Superadmin_model->GetAllResultOrderByWhere('subcategory','sc_sequence','ASC',array('sc_delete'=>'No'));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/subcategory/subcategory_list', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}
public function SubCategoryAdd()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Slider Add | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['category_list']=$this->Superadmin_model->GetAllResultOrderByWhere('category','cat_sequence','ASC',array('cat_delete'=>'No'));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/subcategory/add_subcategory', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function SubCategoryAddProcess()
{
   $successstatus=$this->Superadmin_model->SubCategoryAddProcess();
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Added');
echo json_encode($data);    
}

public function SubCategoryEdit($slug)
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Slider Add | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['category_list']=$this->Superadmin_model->GetAllResultOrderByWhere('category','cat_sequence','ASC',array('cat_delete'=>'No'));
    $data['datadetail']=$this->Superadmin_model->GetAllRowWhere('subcategory',array('sc_slug'=>$slug));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/subcategory/edit_subcategory', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function SubCategoryEditProcess()
{
   $successstatus=$this->Superadmin_model->SubCategoryEditProcess();
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Update');
echo json_encode($data);    
}

public function SubCategoryChangeStatus()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$dataarray =  array(
'sc_status'=> $this->input->post("sc_status"),
);
$this->Home_model->updatedata('subcategory',array('sc_slug'=>$this->input->post("sc_slug")),$dataarray);
$data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Status Change');
echo json_encode($data);
}

public function SubCategoryDelete()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$dataarray =  array(
'sc_delete'=> 'Yes',
);
$successstatus=$this->Superadmin_model->updatedata('subcategory',array('sc_slug'=>$this->input->post("sc_slug")),$dataarray);
$data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Deleted');
echo json_encode($data);

} 

// =================================Slider=================================//
public function SliderList()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Slider List | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['data_list']=$this->Superadmin_model->GetAllResultOrderBy('slider','slider_sequence','ASC');
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/slider/slider_list', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}
public function SliderAdd()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Slider Add | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/slider/add_slider', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function SliderAddProcess()
{
   $successstatus=$this->Superadmin_model->SliderAddProcess();
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Added Slider');
echo json_encode($data);    
}

public function SliderEdit($slug)
{if($this->session->userdata('user_id')=='') {redirect('Login');}
    $data['title']='Slider Add | E-Planet';
    $data['admindetail']=$this->Superadmin_model->GetAllRowWhere('user',array('user_id'=>$this->session->userdata('user_id')));
    $data['datadetail']=$this->Superadmin_model->GetAllRowWhere('slider',array('slider_slug'=>$slug));
    $this->load->view('backend/superadmin/layout/header', $data);
    $this->load->view('backend/superadmin/layout/sidebar', $data);
    $this->load->view('backend/superadmin/layout/sidebartop', $data);
    $this->load->view('backend/superadmin/Websitesetting/slider/edit_slider', $data);
    $this->load->view('backend/superadmin/layout/footer', $data);
}

public function SliderEditProcess()
{
   $successstatus=$this->Superadmin_model->SliderEditProcess();
   $data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Update Slider');
echo json_encode($data);    
}

public function SliderChangeStatus()
{if($this->session->userdata('user_id')=='') {redirect('Login');}
$dataarray =  array(
'slider_status'=> $this->input->post("slider_status"),
);
$this->Home_model->updatedata('slider',array('slider_slug'=>$this->input->post("slider_slug")),$dataarray);
$data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Change Slider');
echo json_encode($data);
}

public function SliderDelete()
{if($this->session->userdata('user_id')=='') {redirect('Login');}

$successstatus=$this->Superadmin_model->deletedata('slider',array('slider_slug'=>$this->input->post("slider_slug")),$dataarray);
$data = array('statusCode' => '200','title' => 'Successfully', 'message'=> 'Successfully Deleted Slider');
echo json_encode($data);

} 

}?>