<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Syllabus_Controller extends CI_Controller
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
        $this->load->model('Syllabus_Model');
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
        $this->data['pagename'] = "Syllabus";
        $this->data['editSyllabus'] = "";
        $this->data['syllabuslist'] = $this->Syllabus_Model->getAllSyllabus();
        $this->load->view('syllabus/index', $this->data);
    }


    public function savesyllabus()
    {

        $galleryData = array();


        $config['upload_path'] = './uploads/syllabus';

        $config['allowed_types'] = 'gif|jpg|png|webp|jpeg|pdf';

        // $config['max_size'] = 1000; 

        // $config['width'] = 200;

        // $config['height'] = 200;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {

            $response = array('res' => false, 'message' => $this->upload->display_errors());
        } else {

            $this->data = array('upload_data' => $this->upload->data());

            $fileName = $this->data['upload_data']['file_name'];

            $galleryData['Image'] = $fileName;
            $galleryData['Category'] = $this->input->post('category');

            // echo'<br>';print_r($blogData);exit;

            $result = $this->Syllabus_Model->savesyllabus($galleryData);
            if ($result) {
                $response = array("res" => true, 'message' => 'Blog added successfully.');
            } else {
                $response = array('res' => false, 'message' => 'An unexpected error occurred');
            }

           
        }
        echo json_encode($response);
    }




    public function deletesyllabus()
    {
        $galleryId = $_POST['id'];



        if ($galleryId != "") {

            $existGallery = $this->Syllabus_Model->findSyllabus($galleryId);

            $old_filename = $existGallery->Image;
            if ($old_filename && file_exists('./uploads/syllabus/' . $old_filename)) {
                unlink('./uploads/syllabus/' . $old_filename);
                $result = $this->Syllabus_Model->deletesyllabus($galleryId);
                if ($result) {
                    $response = array("res" => true, 'message' => 'Role deleted successfully.');
                } else {
                    $response = array('res' => false, 'message' => 'Unable to delete blog.');
                }
            } else {
                $response = array('res' => false, 'message' => 'An unexpected error occurred.');
            }
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred.');
        }

        echo json_encode($response);
    }
}
