<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial_Controller extends CI_Controller
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
        $this->load->model('Testimonial_Model');
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
        $this->data['pagename'] = "Testimonial";
        $this->data['testimoniallist'] = $this->Testimonial_Model->getAllTestimonial('1||0');
        $this->load->view('testimonial/index', $this->data);
    }


    public function savetestimonial()
    {

        $testimonialData = array(
            'Name'=> $this->input->post('name'),
            'Content'=> $this->input->post('content'),
            'Status'=> $this->input->post('status'),
        );


        $config['upload_path'] = './uploads/testimonial';

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

            $testimonialData['Image'] = $fileName;

            // echo'<br>';print_r($blogData);exit;

            $result = $this->Testimonial_Model->savetestimonial($testimonialData);
            if ($result) {
                $response = array("res" => true, 'message' => 'Blog added successfully.');
            } else {
                $response = array('res' => false, 'message' => 'An unexpected error occurred');
            }

            echo json_encode($response);
        }
    }


    public function edittestimonial($id)
    {
        if ($id != "") {
            $testData = $this->Testimonial_Model->findTestimonial($id);
           
            if($testData == "")
            {
                return redirect('Testimonial');
            }

            else {

                $this->data['pagename'] = "Edit Testimonial";
                $this->data['editTestimonial'] = $testData;
                $this->data['testimoniallist'] = $this->Testimonial_Model->getAllTestimonial('1||0');
                $this->load->view('testimonial/edittestimonial', $this->data);
            }
           
           
           
        } else {
            return redirect('Testimonial');
        }

      
      
    }


    public function updatetestimonial()
    {
        $test_id = $this->input->post('Id');
        $editTest = $this->Testimonial_Model->findTestimonial($test_id);

        $updatedData = array(

            'Name'=> $this->input->post('name'),
            'Content'=> $this->input->post('content'),
            'Status'=> $this->input->post('status'),

        );

        if ($_FILES['image']['name'] != '') {
            // Image upload configuration
            $config['upload_path'] = './uploads/testimonial'; // Specify your upload path
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            // $config['max_size'] = 2048; // Specify the maximum file size in kilobytes

            // Load the upload library with the configuration
            $this->load->library('upload', $config);

            // Check if the image is uploaded successfully
            if ($this->upload->do_upload('image')) {

                $old_filename = $editTest->Image;

                // Delete old file if it exists
                if ($old_filename && file_exists('./uploads/testimonial/' . $old_filename)) {
                    unlink('./uploads/testimonial/' . $old_filename);
                }



                $image_data = $this->upload->data();
                $updatedData['Image'] = $image_data['file_name'];
            } else {
                $response = array('res' => false, 'message' => $this->upload->display_errors());
            }
        }

        $result = $this->Testimonial_Model->updatetestimonial($test_id, $updatedData);


        if ($result) {
            $response = array("res" => true, 'message' => 'Blog updated successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred.');
        }

        echo json_encode($response);
    }




    public function deletetestimonial()
    {
        $testimonialId = $_POST['id'];



        if ($testimonialId != "") {

            $existGallery = $this->Testimonial_Model->findTestimonial($testimonialId);

            $old_filename = $existGallery->Image;
            if ($old_filename && file_exists('./uploads/testimonial/' . $old_filename)) {
                unlink('./uploads/testimonial/' . $old_filename);
                $result = $this->Testimonial_Model->deletetestimonial($testimonialId);
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
