<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inquiry_Controller extends CI_Controller
{

    private $userName;
    private $userId;

    public function __construct()
    {
        parent::__construct();

        $this->userId = $this->session->userdata('user_id');
        $this->userName = $this->session->userdata('username');

        if (!isset($this->userId)) {
            redirect('login');
        }

        $this->load->model('Login_model');
        $this->load->model('Inquiry_Model');
        $this->load->model('Seo_Model');
        
        // Fetch data and store in $this->data
        $this->loadDashboardData();
    }

    private function loadDashboardData()
    {   
        $this->data['editseo'] = $this->Seo_Model->findSeo('1');
        $this->data['contactnotify'] = $this->Inquiry_Model->TotalContactInquiry();
    }


    public function index()
    {
        $this->data['pagename'] = "Inquiry Details";
        $this->data['contactlist'] =  $this->Inquiry_Model->getAllContact();
        $this->data['contactnotify'] = $this->Inquiry_Model->TotalContactInquiry(); 
        $this->load->view('inquiry/index', $this->data);
    }



    public function deletecontact()
    {
        $inqId = $_POST['id'];
        if ($inqId != "") {
            $result = $this->Inquiry_Model->deletecontact($inqId, array('IsDeleted' => '1'));
            if ($result) {
                $response = array("res" => true, 'message' => 'Role deleted successfully.');
            } else {
                $response = array('res' => false, 'message' => 'Unable to delete blog.');
            }
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred.');
        }

        echo json_encode($response);
    }

    public function deletedonate()
    {
        $inqId = $_POST['id'];
        if ($inqId != "") {
            $result = $this->Inquiry_Model->deletedonate($inqId, array('isdeleted' => '1'));
            if ($result) {
                $response = array("res" => true, 'message' => 'Role deleted successfully.');
            } else {
                $response = array('res' => false, 'message' => 'Unable to delete blog.');
            }
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred.');
        }

        echo json_encode($response);
    }
  
}
