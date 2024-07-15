<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_Controller extends CI_Controller
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
        $this->load->model('Gallery_Model');
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
        $this->data['pagename'] = "Gallery";
        $this->data['editGallery'] = "";
        $this->data['gallerylist'] = $this->Gallery_Model->getAllGallery();
        $this->load->view('gallery/index', $this->data);
    }


    public function savegallery()
    {

        $galleryData = array();


        $config['upload_path'] = './uploads/gallery';

        $config['allowed_types'] = 'gif|jpg|png|webp|jpeg';

        // $config['max_size'] = 1000; 

        // $config['width'] = 200;

        // $config['height'] = 200;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {

            $response = array('res' => false, 'message' => $this->upload->display_errors());
        } else {

            $this->data = array('upload_data' => $this->upload->data());

            $fileName = $this->data['upload_data']['file_name'];

            $galleryData['ImagePath'] = $fileName;

            // echo'<br>';print_r($blogData);exit;

            $result = $this->Gallery_Model->savegallery($galleryData);
            if ($result) {
                $response = array("res" => true, 'message' => 'Blog added successfully.');
            } else {
                $response = array('res' => false, 'message' => 'An unexpected error occurred');
            }

            echo json_encode($response);
        }
    }




    public function deletegallery()
    {
        $galleryId = $_POST['id'];



        if ($galleryId != "") {

            $existGallery = $this->Gallery_Model->findGallery($galleryId);

            $old_filename = $existGallery->ImagePath;
            if ($old_filename && file_exists('./uploads/gallery/' . $old_filename)) {
                unlink('./uploads/gallery/' . $old_filename);
                $result = $this->Gallery_Model->deletegallery($galleryId);
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
