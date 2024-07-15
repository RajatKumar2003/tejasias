<?php date_default_timezone_set('Asia/Kolkata');
class Login_model extends CI_model{
//============================Login===========================//

//============================Login===========================//
public function validate_user(){
  

  $email = $this->input->post('login_id');
  $password = strval($this->input->post('login_pass'));
  
//   $data = array(
//     'Email'=> $email,
//     'Password'=>password_hash($password,PASSWORD_DEFAULT)
//   );
//  return $this->db->insert('user_tbl',$data);
  
  $user = $this->db->get_where('user_tbl', ['Email' => $email])->row_array();
  
  

  if ($user && password_verify($password,strval($user['Password']))) {
    return $user;
  }
  
  else {
    return 0;
  }

  
  
  }
		
public function user_details(){
	
	return $this->db->get('admin_tbl')->result();
}
		
public function get_user_profile_details(){

	return $this->db->get('admin_tbl')->result();
}
//===========================/Login===========================//

public function login_details($nav_id=''){
  $this->require_login();
  $dt['admin_details'] = $this->user_details();

  // echo "<pre>";
  //  print_r($dt['navigation']);
  // die();
  return $dt;
}

//======================Check Permission======================//
public function make_allow($nav_id){
  if ($this->session->userdata('user_type') == 1) return;
  else if($this->Navigation_model->check_permission($nav_id)) return;
  $this->user_go_back();
}

public function allow_ajax($nav_id){
  if ($this->session->userdata('admin_type') == 1) return true;
  else if($this->Navigation_model->check_permission($nav_id)) return true;
  echo json_encode(array( 'status'=>'error', 'message'=>'Sorry, You do not have Permission!! Please contact to Admin.')); 
  return false;
}

public function only_admin(){
  if ($this->session->userdata('admin_type') == 1) return true;
  echo json_encode(array( 'status'=>'error', 'message'=>'Sorry, Only Admin have Permission.'));
  return false;
}
//=====================/Check Permission======================//


public function require_login(){
  if($this->session->userdata('admin_id') == true) return;
  $this->user_go_back();
}

public function user_go_back(){
  if (isset($_SERVER['HTTP_REFERER'])) {
    $curl  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://" ;
    $curl .= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if ($curl != $_SERVER['HTTP_REFERER']) redirect($_SERVER['HTTP_REFERER']);
  } redirect(site_url('Login'));
}

//============================Login===========================//
public function insert_sign_up(){

    $this->db->select('m_admin_id');
    $this->db->where('m_admin_login_id', $this->input->post('m_admin_login_id'));
    $sql=$this->db->get('master_admin_tbl');

    if($sql->num_rows() > 0) { 
  	  $data['message'] = '<div class="alert alert-info"> <strong><i class="fa fa-times"></i> &nbsp; Already Exists !...</strong> Try With Another Login ID . </div>' ;
  	  $data['status'] = 'fail';

    }else{
    	$insert_data = array(
    	    "m_admin_login_id" => $this->input->post('m_admin_login_id'),
    	    "m_admin_pass"     => $this->input->post('m_admin_pass'),
    	    "m_admin_name"     => $this->input->post('m_admin_name'),
	        "m_admin_contact"  => $this->input->post('m_admin_contact'),
	        "m_admin_status"   => 1,
	        "m_admin_added_on" => date("Y-m-d H:i:s")
    	);
    	$this->db->insert('master_admin_tbl',$insert_data);

    	$data['message'] = '<div class="alert alert-success"> <strong><i class="fa fa-check"></i> &nbsp; Successfully SignUp !...</strong> & You Can Login Now. </div>' ;
  	    $data['status'] = 'success';

    }

    return $data;
}
//===========================/Login===========================//

//===========================/Login===========================//
} ?>