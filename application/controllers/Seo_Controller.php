<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seo_Controller extends CI_Controller
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
        $this->load->dbforge();
        
        // Fetch data and store in $this->data
        $this->loadDashboardData();
    }

    private function loadDashboardData()
    {
     
        $this->data['contactnotify'] = $this->Inquiry_Model->TotalContactInquiry();
    }

    public function index()
    {
        $this->data['pagename'] = "Seo Tools";
        $this->data['editseo'] =  $this->Seo_Model->findSeo('1');
        $this->load->view('seo/index', $this->data);
    }

    public function updateseo() {
        $seo_id = $this->input->post('Id');
    
        $updateData = array(
            'Language' => $this->input->post('language'),
            'SiteTitle' => $this->input->post('sitetitle'),
            'SiteDescription' => $this->input->post('sitedescription'),
            'KeyWords' => $this->input->post('keywords'),
            'GoogleAnalytics' => $this->input->post('googleanalytics'),
        );
    
        // Initialize array for uploaded and existing filenames
        $filenames = array(
            'SiteMap' => '',
            'Logo' => '',
            'Favicon' => '',
        );
    
        // Check if any files were uploaded
        if (isset($_FILES['sitemap']) || isset($_FILES['logo']) || isset($_FILES['favicon'])) {
            $uploadDir = 'uploads/seo/';
    
            foreach ($_FILES as $fileInput => $file) {
                // Check for upload error or no file selected
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $fileName = $file['name'];
                    $filePath = $uploadDir . $fileName;
    
                    // Retrieve existing filename for deletion (if applicable)
                    $existingFilename = $this->get_existing_filename($seo_id, $fileInput);
    
                    // Delete existing file if present
                    if ($existingFilename && file_exists($uploadDir . $existingFilename)) {
                        unlink($uploadDir . $existingFilename);
                    }
    
                    // Move uploaded file
                    if (move_uploaded_file($file['tmp_name'], $filePath)) {
                        $filenames[$fileInput] = $fileName; // Store uploaded filename
                    } else {
                        $filenames[$fileInput] = 'Failed to move ' . $fileName; // Store error message
                    }
                } else {
                    // No file uploaded, use existing filename from database (if available)
                    $existingFilename = $this->get_existing_filename($seo_id, $fileInput);
                    if ($existingFilename) {
                        $filenames[$fileInput] = $existingFilename;
                    } else {
                        $filenames[$fileInput] = ''; // No existing filename or upload error
                    }
                }
            }
        } else {
            // No files uploaded, use existing filenames from database (if available)
            foreach ($filenames as $key => &$value) {
                $existingFilename = $this->get_existing_filename($seo_id, $key);
                if ($existingFilename) {
                    $value = $existingFilename;
                } else {
                    $value = ''; // No existing filename
                }
            }
        }
    
        // Update SEO data with filenames
        $updateData = array_merge($updateData, $filenames);
        $result = $this->Seo_Model->updateSeo($seo_id, $updateData);
    }
    

    public function get_existing_filename($seo_id, $fileInput) {
        // Replace with your actual query to retrieve filename based on $seo_id and $fileInput
        $sql = "SELECT $fileInput AS filename FROM seo_tbl WHERE SeoId = ?";
        $query = $this->db->query($sql, array($seo_id));
        
        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            return $row['filename'];
        } else {
            return null;
        }
        
    }
    
    

  
}
