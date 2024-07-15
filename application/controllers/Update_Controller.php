<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_Controller extends CI_Controller
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
        $this->load->model('Update_Model');
        $this->load->model('Seo_Model');
        
        // Fetch data and store in $this->data
        $this->loadDashboardData();
    }

    private function loadDashboardData()
    {
        $this->data['editseo'] = $this->Seo_Model->findSeo('1');
        $this->data['contactnotify'] = $this->Inquiry_Model->TotalContactInquiry();
    }


    public function category()
    {
        $this->data['pagename'] = "Update Category";
        $this->data['editCategory'] = "";
        $this->data['categorylist'] = $this->Update_Model->getAllCategory('1||0');
        $this->load->view('update/category', $this->data);
    }


    public function savecategory()
    {
        $categoryData = array(
            'Title' => $this->input->post('title'),
            // 'Description' => $this->input->post('description'),
            'Status' => $this->input->post('status'),
        );

        $result = $this->Update_Model->insertProductCategory($categoryData);

        if ($result) {
            $response = array("res" => true, 'message' => 'Category added successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred');
        }

        echo json_encode($response);
    }

    public function editcategory($catId)
    {
        if ($catId != "") {
            $catData = $this->Update_Model->findCategory($catId);
            $this->data['editCategory'] = $catData;
        } else {
            $this->data['editCategory'] = "";
        }

        $this->data['pagename'] = "Edit Category";
        $this->data['categorylist'] = $this->Update_Model->getAllCategory('1||0');
        $this->load->view('update/category', $this->data);
    }

    public function updatecategory()
    {
        $cat_id = $this->input->post('Id');

        $updateData = array(
            'Title' => $this->input->post('title'),
            // 'Description' => $this->input->post('description'),
            'Status' => $this->input->post('status'),
        );

        $result = $this->Update_Model->updateCategory($cat_id, $updateData);
        if ($result) {
            $response = array("res" => true, 'message' => 'User Role updated successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred');
        }
        echo json_encode($response);
    }


    public function deletecategory()
    {
        $catId = $_POST['id'];
        if ($catId != "") {
            $result = $this->Update_Model->updateCategory($catId, array('IsDeleted' => '1'));
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

    public function index()
    {
        $this->data['pagename'] = "Updates";
        $this->data['editUpdate'] = "";
        $this->data['categorylist'] = $this->Update_Model->getAllCategory('1');
        $this->data['updatelist'] = $this->Update_Model->getAllUpdate('1||0');
        $this->load->view('update/update', $this->data);
    }

    public function editupdate($updateId)
    {
        if ($updateId != "") {
            $updateData = $this->Update_Model->findUpdate($updateId);

            if ($updateData == "") {
                return redirect('Update');
            } else {
                $this->data['pagename'] = "Edit Updates";
                $this->data['editUpdate'] = $updateData;
                $this->data['categorylist'] = $this->Update_Model->getAllCategory('1');
                $this->data['updatelist'] = $this->Update_Model->getAllUpdate('1||0');
                $this->load->view('update/update', $this->data);
            }
        } else {
            return redirect('Update');
        }
    }

    public function saveupdate()
    {


        $updateData = array(

            'Category' => $this->input->post('category'),
            'Title' => $this->input->post('title'),
            'Description' => $this->input->post('description'),
            'Status' => $this->input->post('status'),

        );


        $result = $this->Update_Model->saveupdate($updateData);
        if ($result) {
            $response = array("res" => true, 'message' => 'Blog added successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred');
        }

        echo json_encode($response);
    }


    public function updateupdates()
    {
        $update_id = $this->input->post('Id');
      

        $updatedData = array(

            'Category' => $this->input->post('category'),
            'Title' => $this->input->post('title'),
            'Description' => $this->input->post('description'),
            'Status' => $this->input->post('status'),

        );

        $result = $this->Update_Model->updateupdates($update_id, $updatedData);


        if ($result) {
            $response = array("res" => true, 'message' => 'Blog updated successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred.');
        }

        echo json_encode($response);
      
    }

    public function deleteupdate()
    {
        $updateId = $_POST['id'];
        if ($updateId != "") {
            $result = $this->Update_Model->deleteupdate($updateId);
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
