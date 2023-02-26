<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin_model extends CI_Model
{

public function GetAllResultWhereJoin($paymenttype)
{
 $this->db->select('user.first_name,user.last_name,payment_transition.*');
 $this->db->join('user','user.user_id=payment_transition.user_id');
 $this->db->where('payment_transition.pt_status',$paymenttype);
 $query=$this->db->get('payment_transition')->result(); 
 return $query;    
} 

public function GetAllResultWithdrawal($Status)
{
 $this->db->select('user.first_name,user.last_name,wallet_history.*');
 $this->db->join('user','user.user_id=wallet_history.user_id');
 $this->db->where('wallet_history.amount_type','Withdraw');
 $this->db->where('wallet_history.amount_type_status',$Status);
 $query=$this->db->get('wallet_history')->result(); 
 return $query;    
}     
    
public function GetAllResultWhere($table,$where)
{
 $this->db->where($where);
 $query=$this->db->get($table)->result(); 
 return $query;   
}   
public function GetAllRowWhere($table,$where)
{
 $this->db->where($where);
 $query=$this->db->get($table)->row(); 
 return $query;   
}
public function GetAllResult($table)
{
 $query=$this->db->get($table)->result(); 
 return $query;   
} 
public function GetAllResultOrderBy($table,$coloum,$orderby)
{
 $query=$this->db->order_by($coloum,$orderby);  
 $query=$this->db->get($table)->result(); 
 return $query;   
}

public function GetAllResultOrderByWhere($table,$coloum,$orderby,$where)
{
 $query=$this->db->where($where);
 $query=$this->db->order_by($coloum,$orderby);  
 $query=$this->db->get($table)->result(); 
 return $query;   
}

public function GetAllRow($table)
{
 $query=$this->db->get($table)->row(); 
 return $query;   
}
public function insertdata($table,$data)
{
$this->db->insert($table,$data);
return $this->db->insert_id();   
}

public function updatedata($table,$where,$data)
{
$this->db->where($where);
$query=$this->db->update($table,$data);
return $query;    
}
public function deletedata($table,$where)
{
$this->db->where($where);
$query=$this->db->delete($table);
return $query;   
}
public function deletedataOrderBy($table,$where)
{
 $this->db->where($where);
 $this->db->order_by($coloum, $orderby);
 $query=$this->db->delete($table);
 return $query;   
}

public function MenuAddProcess(){
    $data_arr = array(
            'fm_name' => $this->input->post("fm_name"),
            'fm_status' => $this->input->post("fm_status"),
            'fm_slug' => md5(date('Y-m-d H:i:s')),
    );
    if ($_FILES["fm_image"]["size"] > 0) {
    $config['upload_path']   = './upload/footermenu';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('fm_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["fm_image"] ='upload/footermenu/'.$img_data['file_name'];
    }
}
    $this->db->insert('footer_menu', $data_arr);  
    $insert_id=$this->db->insert_id();
    $data_arr_order = array(
            'fm_order' => $insert_id,
    );
         $this->db->where('fm_id',$insert_id);
 return  $this->db->update('footer_menu', $data_arr_order);
}

public function MenuEditProcess(){
    $data_arr = array(
            'fm_name' => $this->input->post("fm_name"),
            'fm_status' => $this->input->post("fm_status"),
            'fm_order' => $this->input->post("fm_order"),
    );
    if ($_FILES["fm_image"]["size"] > 0) {
    $config['upload_path']   = './upload/footermenu';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('fm_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["fm_image"] ='upload/footermenu/'.$img_data['file_name'];
    }
}
         $this->db->where('fm_id',$this->input->post("fm_id"));
 return  $this->db->update('footer_menu', $data_arr);

}

/// category
public function CategoryAddProcess(){
    $data_arr = array(
            'cat_title' => $this->input->post("cat_title"),
            'cat_details' => $this->input->post("cat_details"),
            'cat_sequence' => $this->input->post("cat_sequence"),
            'cat_delete' => 'No',
            'cat_status' => $this->input->post("cat_status"),
            'cat_slug' => md5(date('Y-m-d H:i:s')),
    );
    if ($_FILES["cat_image"]["size"] > 0) {
    $config['upload_path']   = './upload/category';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('cat_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["cat_image"] ='upload/category/'.$img_data['file_name'];
    }
}
    $this->db->insert('category', $data_arr);  
    return  $insert_id=$this->db->insert_id();
}

public function CategoryEditProcess(){
    $data_arr = array(
            'cat_title' => $this->input->post("cat_title"),
            'cat_details' => $this->input->post("cat_details"),
            'cat_status' => $this->input->post("cat_status"),
            'cat_sequence' => $this->input->post("cat_sequence"),
    );
    if ($_FILES["cat_image"]["size"] > 0) {
    $config['upload_path']   = './upload/category';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('cat_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["cat_image"] ='upload/category/'.$img_data['file_name'];
    }
}
         $this->db->where('cat_id',$this->input->post("cat_id"));
 return  $this->db->update('category', $data_arr);

}

/// Subcategory
public function SubCategoryAddProcess(){
    $data_arr = array(
            'cat_id' => $this->input->post("cat_id"),
            'sc_title' => $this->input->post("sc_title"),
            'sc_sub_title' => $this->input->post("sc_sub_title"),
            'sc_amount' => $this->input->post("sc_amount"),
            'sc_sequence' => $this->input->post("sc_sequence"),
            'sc_status' => $this->input->post("sc_status"),
            'sc_delete' => 'No',
            'sc_slug' => md5(date('Y-m-d H:i:s')),
    );
    if ($_FILES["sc_image"]["size"] > 0) {
    $config['upload_path']   = './upload/subcategory';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('sc_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["sc_image"] ='upload/subcategory/'.$img_data['file_name'];
    }
}
    $this->db->insert('subcategory', $data_arr);  
    return  $insert_id=$this->db->insert_id();
}

public function SubCategoryEditProcess(){
    $data_arr = array(
            'cat_id' => $this->input->post("cat_id"),
            'sc_title' => $this->input->post("sc_title"),
            'sc_sub_title' => $this->input->post("sc_sub_title"),
            'sc_amount' => $this->input->post("sc_amount"),
            'sc_sequence' => $this->input->post("sc_sequence"),
            'sc_status' => $this->input->post("sc_status"),
    );
    if ($_FILES["sc_image"]["size"] > 0) {
    $config['upload_path']   = './upload/subcategory';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('sc_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["sc_image"] ='upload/subcategory/'.$img_data['file_name'];
    }
}
         $this->db->where('sc_id',$this->input->post("sc_id"));
 return  $this->db->update('subcategory', $data_arr);

}

/// Slider
public function SliderAddProcess(){
    $data_arr = array(
            'slider_name' => $this->input->post("slider_name"),
            'slider_url' => $this->input->post("slider_url"),
            'slider_sequence' => $this->input->post("slider_sequence"),
            'slider_status' => $this->input->post("slider_status"),
            'slider_slug' => md5(date('Y-m-d H-i')),
    );
    if ($_FILES["slider_image"]["size"] > 0) {
    $config['upload_path']   = './upload/slider';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('slider_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["slider_image"] ='upload/slider/'.$img_data['file_name'];
    }
}
    $this->db->insert('slider', $data_arr);  
    return  $insert_id=$this->db->insert_id();
}

public function SliderEditProcess(){
    $data_arr = array(
            'slider_name' => $this->input->post("slider_name"),
            'slider_url' => $this->input->post("slider_url"),
            'slider_status' => $this->input->post("slider_status"),
            'slider_sequence' => $this->input->post("slider_sequence"),
    );
    if ($_FILES["slider_image"]["size"] > 0) {
    $config['upload_path']   = './upload/slider';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('slider_image')) {
        $error = array(
            'error' => $this->upload->display_errors()
        );
    } else {
        $img_data= $this->upload->data();
        $data_arr["slider_image"] ='upload/slider/'.$img_data['file_name'];
    }
}
         $this->db->where('slider_id',$this->input->post("slider_id"));
 return  $this->db->update('slider', $data_arr);

}




}?>