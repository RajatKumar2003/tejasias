<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_Controller extends CI_Controller
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
        $this->load->model('Blog_Model');
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
        $this->data['pagename'] = "Blog Category";
        $this->data['editCategory'] = "";
        $this->data['categorylist'] = $this->Blog_Model->getAllCategory('1||0');
        $this->load->view('blog/category', $this->data);
    }


    public function savecategory()
    {
        $categoryData = array(
            'Title' => $this->input->post('title'),
            'Description' => $this->input->post('description'),
            'Status' => $this->input->post('status'),
        );

        $result = $this->Blog_Model->insertProductCategory($categoryData);

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
            $catData = $this->Blog_Model->findCategory($catId);
            $this->data['editCategory'] = $catData;
        } else {
            $this->data['editCategory'] = "";
        }

        $this->data['pagename'] = "Edit Category";
        $this->data['categorylist'] = $this->Blog_Model->getAllCategory('1||0');
        $this->load->view('blog/category', $this->data);
    }

    public function updatecategory()
    {
        $cat_id = $this->input->post('Id');

        $updateData = array(
            'Title' => $this->input->post('title'),
            'Description' => $this->input->post('description'),
            'Status' => $this->input->post('status'),
        );

        $result = $this->Blog_Model->updateCategory($cat_id, $updateData);
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
            $result = $this->Blog_Model->updateCategory($catId, array('IsDeleted' => '1'));
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
        $this->data['pagename'] = "Blog";
        $this->data['editBlog'] = "";
        $this->data['blogcategory'] = $this->Blog_Model->getAllCategory('1');
        $this->data['bloglist'] = $this->Blog_Model->getAllBlog('1||0');
        $this->load->view('blog/blog', $this->data);
    }

    public function editblog($blogId)
    {
        if ($blogId != "") {
            $blogData = $this->Blog_Model->findBlog($blogId);

            if ($blogData == "") {
                return redirect('Blog');
            } else {
                $this->data['pagename'] = "Edit Blog";
                $this->data['editBlog'] = $blogData;
                $this->data['blogcategory'] = $this->Blog_Model->getAllCategory('1');
                $this->data['bloglist'] = $this->Blog_Model->getAllBlog('1||0');
                $this->load->view('blog/editblog', $this->data);
            }
        } else {
            return redirect('Blog');
        }
    }

    public function saveblog()
    {


        $blogData = array(

            'Category' => $this->input->post('category'),
            'Title' => $this->input->post('title'),
            'AuthorName' => $this->input->post('author'),
            'ShortDescription' => $this->input->post('shortdescription'),
            'FullDescription' => $this->input->post('fulldescription'),
            'Status' => $this->input->post('status'),
            'Date' => $this->input->post('date'),

        );


        $config['upload_path'] = './uploads/blog';

        $config['allowed_types'] = 'gif|jpg|png';

        // $config['max_size'] = 1000; 

        // $config['width'] = 200;

        // $config['height'] = 200;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {

            $response = array('res' => false, 'message' => $this->upload->display_errors());
        } else {

            $this->data = array('upload_data' => $this->upload->data());

            $fileName = $this->data['upload_data']['file_name'];

            $blogData['image'] = $fileName;

            // echo'<br>';print_r($blogData);exit;

            $result = $this->Blog_Model->saveblog($blogData);
            if ($result) {
                $response = array("res" => true, 'message' => 'Blog added successfully.');
            } else {
                $response = array('res' => false, 'message' => 'An unexpected error occurred');
            }

            echo json_encode($response);
        }
    }


    public function updateblog()
    {
        $blog_id = $this->input->post('id');
        $editBlog = $this->Blog_Model->findBlog($blog_id);

        $updatedData = array(

            'Category' => $this->input->post('category'),
            'Title' => $this->input->post('title'),
            'AuthorName' => $this->input->post('author'),
            'ShortDescription' => $this->input->post('shortdescription'),
            'FullDescription' => $this->input->post('fulldescription'),
            'Status' => $this->input->post('status'),
            'Date' => $this->input->post('date'),

        );

        if ($_FILES['image']['name'] != '') {
            // Image upload configuration
            $config['upload_path'] = './uploads/blog'; // Specify your upload path
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            // $config['max_size'] = 2048; // Specify the maximum file size in kilobytes

            // Load the upload library with the configuration
            $this->load->library('upload', $config);

            // Check if the image is uploaded successfully
            if ($this->upload->do_upload('image')) {

                $old_filename = $editBlog->Image;

                // Delete old file if it exists
                if ($old_filename && file_exists('./uploads/blog/' . $old_filename)) {
                    unlink('./uploads/blog/' . $old_filename);
                }



                $image_data = $this->upload->data();
                $updatedData['image'] = $image_data['file_name'];
            } else {
                $response = array('res' => false, 'message' => $this->upload->display_errors());
            }
        }

        $result = $this->Blog_Model->updateblog($blog_id, $updatedData);


        if ($result) {
            $response = array("res" => true, 'message' => 'Blog updated successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred.');
        }

        echo json_encode($response);
    }

    public function deleteblog()
    {
        $blogId = $_POST['id'];
        if ($blogId != "") {
            $result = $this->Blog_Model->updateblog($blogId, array('IsDeleted' => '1'));
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
