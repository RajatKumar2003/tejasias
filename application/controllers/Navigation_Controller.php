<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navigation_Controller extends CI_Controller
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
        $this->load->model('Navigation_Model');
        $this->load->model('Seo_Model');
        // Fetch data and store in $this->data
        $this->loadDashboardData();
    }

    private function loadDashboardData()
    {
        $this->data['editseo'] = $this->Seo_Model->findSeo('1');
        $this->data['contactnotify'] = $this->Inquiry_Model->TotalContactInquiry();
    }

    public function parentlink()
    {
        $this->data['pagename'] = "Parent Link";
        $this->data['editParent'] = '';
        $this->data['parentlist'] = $this->Navigation_Model->getAllParent('1||0');
        $this->load->view('navigation/parent',$this->data);
    }


    public function saveparentlink()
    {
        $parentData = array(
            'MCatTitle'=> $this->input->post('title'),
            'MCatDescription'=> $this->input->post('description'),
            'MCatKeyword'=> $this->input->post('keyword'),
            'MCatOrder'=> $this->input->post('order'),
            'MCatLanguage'=> $this->input->post('language'),
            'MCatStatus'=> $this->input->post('status'),
            'MCatSlug'=> $this->input->post('slug'),
        );

        
        $result = $this->Navigation_Model->insertParentLink($parentData);

        if ($result) {
            $response = array("res" => true, 'message' => 'Category added successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred');
        }

        echo json_encode($response);
    }

    public function editparent($id)
    {
        if ($id != "") {
            $parentData = $this->Navigation_Model->findParent($id);

            if ($parentData == "") {
                return redirect('parentlink');
            } else {
                $this->data['pagename'] = "Edit Parent";
                $this->data['editParent'] = $parentData;
                $this->data['parentlist'] = $this->Navigation_Model->getAllParent('1||0');
                $this->load->view('navigation/parent',$this->data);
            }
        } else {
            return redirect('parentlink');
        }
    }


    public function updateparentlink()
    {
        $parent_id = $this->input->post('Id');

        $updateData = array(
            'MCatTitle'=> $this->input->post('title'),
            'MCatDescription'=> $this->input->post('description'),
            'MCatKeyword'=> $this->input->post('keyword'),
            'MCatOrder'=> $this->input->post('order'),
            'MCatLanguage'=> $this->input->post('language'),
            'MCatStatus'=> $this->input->post('status'),
            'MCatSlug'=> $this->input->post('slug'),
        );

        $result = $this->Navigation_Model->updateparentlink($parent_id, $updateData);
        if ($result) {
            $response = array("res" => true, 'message' => 'User Role updated successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred');
        }
        echo json_encode($response);
    }

    public function deleteparentlink()
    {
        $parentId = $_POST['id'];
        if ($parentId != "") {
            $result = $this->Navigation_Model->deleteparentlink($parentId);
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
        $this->data['pagename'] = "Menu Link";
        $this->data['editMenu'] = '';
        $this->data['parentlist'] = $this->Navigation_Model->getAllParent('1');
        $this->data['menulist'] = $this->Navigation_Model->getAllMenu('1||0');
        $this->load->view('navigation/index', $this->data);
    }

    public function savemenulink()
    {
        $parentData = array(
            'MTitle'=> $this->input->post('title'),
            'MDescription'=> $this->input->post('description'),
            'MKeyword'=> $this->input->post('keyword'),
            'MCategory'=> $this->input->post('category'),
            'MLanguage'=> $this->input->post('language'),
            'MStatus'=> $this->input->post('status'),
            'MCatSlug'=> $this->input->post('slug'),
        );

        
        $result = $this->Navigation_Model->insertMenuLink($parentData);

        if ($result) {
            $response = array("res" => true, 'message' => 'Category added successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred');
        }

        echo json_encode($response);
    }

    public function editmenu($id)
    {
        if ($id != "") {
            $menuData = $this->Navigation_Model->findMenu($id);

            if ($menuData == "") {
                return redirect('Navigation');
            } else {
                $this->data['pagename'] = "Edit Menu";
                $this->data['editMenu'] = $menuData;
                $this->data['parentlist'] = $this->Navigation_Model->getAllParent('1');
                $this->data['menulist'] = $this->Navigation_Model->getAllMenu('1||0');
                $this->load->view('navigation/index', $this->data);
            }
        } else {
            return redirect('Navigation');
        }
    }


    public function updatemenulink()
    {
        $menu_id = $this->input->post('Id');

        $updateData = array(
            'MTitle'=> $this->input->post('title'),
            'MDescription'=> $this->input->post('description'),
            'MKeyword'=> $this->input->post('keyword'),
            'MCategory'=> $this->input->post('category'),
            'MLanguage'=> $this->input->post('language'),
            'MStatus'=> $this->input->post('status'),
        );

        $result = $this->Navigation_Model->updatemenulink($menu_id, $updateData);
        if ($result) {
            $response = array("res" => true, 'message' => 'User Role updated successfully.');
        } else {
            $response = array('res' => false, 'message' => 'An unexpected error occurred');
        }
        echo json_encode($response);
    }

    public function deletemenulink()
    {
        $menuId = $_POST['id'];
        if ($menuId != "") {
            $result = $this->Navigation_Model->deletemenulink($menuId);
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
