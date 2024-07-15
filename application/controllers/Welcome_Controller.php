<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');


class Welcome_Controller extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Inquiry_Model');
     

     
  }

 

public function index(){ 

    
 $this->load->view('site/index');
}



} ?>