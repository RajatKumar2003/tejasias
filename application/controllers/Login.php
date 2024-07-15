<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Login extends CI_Controller {
//============================Login===========================//

//============================Login===========================//
public function index(){ 
  $data['pagename'] = "Login";
  $this->load->model('Seo_Model');
  $data['editseo'] =  $this->Seo_Model->findSeo('1');

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $data = $this->Login_model->validate_user();
  
   
      if($data)
      {
        $usrdata=array( 
          'user_id'   => $data['UserId'], 
          'userName' =>$data['Username'],
         
        );
        $this->session->set_userdata($usrdata);
        redirect('Inquiry');
       
      }

      elseif($data==0)
      {
       $this->load->view('login', $data); 
        $this->session->set_flashdata('status','<div class="alert alert-danger" id="alert"> <strong><i class="fa fa-warning"></i> &nbsp; Some Problem Occurred !</strong> Please Try Again. </div>');
      }
  }

  else {
  
    $this->load->view('login', $data); 
  }
}




//===========================/Login===========================//

//===========================/Login===========================//
} ?>