<?php date_default_timezone_set('Asia/Kolkata');
class Product_Model extends CI_model {
//============================User============================//

public function insertProductCategory($data)
{
    $this->db->insert('product_category_tbl',$data);
    return $this->db->affected_rows() > 0;
}
public function getAllCategory($id)
{

    if (strpos($id, '||') !== false) {
        // Multiple values scenario
        $statuses = explode('||', $id);
    } else {
        // Single value scenario
        $statuses = array($id);
    }

    $this->db->where('IsDeleted', '0');
    $this->db->where_in('Status', $statuses);

    return $this->db->get('product_category_tbl')->result();
} 

public function findCategory($catId)
{
    $query = $this->db->get_where('product_category_tbl', array('CatId' => $catId,'IsDeleted'=>'0'));
    return $query->row();
}

public function updateCategory($catId,$data)
{
    $this->db->where('CatId',$catId);
    $this->db->update('product_category_tbl',$data);
    return $this->db->affected_rows() > 0;
}

public function getAllProduct($id)
{

    if (strpos($id, '||') !== false) {
        // Multiple values scenario
        $statuses = explode('||', $id);
    } else {
        // Single value scenario
        $statuses = array($id);
    }

    $this->db->where(array('IsDeleted'=>'0'));
    $this->db->where_in('Status', $statuses);
    return $this->db->get('product_tbl')->result();
}
public function savespecificData($inserted_id)
{
    $titles = $this->input->post("specifictitle");
    $values = $this->input->post("specificvalue");

    if (empty($titles) || empty($values) || count($titles) != count($values)) {
        return false; // Titles and values should be non-empty and of equal length
    }

    $data = [];
    foreach ($titles as $key => $title) {
        $specificData = [
            "title" => $title,
            "value" => $values[$key],
            "productid" => $inserted_id,
        ];
        $data[] = $specificData;
    }

    foreach ($data as $specific) {
        $insertData = [
            'ProductId' => $specific['productid'],
            'Title' => $specific['title'],
            'Value' => $specific['value'],
        ];
        if (!$this->db->insert('product_specification_tbl', $insertData)) {
            return false; // Return false on first insertion failure
        }
    }

    return true; // Return true if all insertions succeed
}


public function updatespecificData($product_id)
{

    $this->db->where('ProductId',$product_id);
    $this->db->delete('product_specification_tbl');

    $titles = $this->input->post("specifictitle");
    $values = $this->input->post("specificvalue");

    if (empty($titles) || empty($values) || count($titles) != count($values)) {
        return false; // Titles and values should be non-empty and of equal length
    }

    $data = [];
    foreach ($titles as $key => $title) {
        $specificData = [
            "title" => $title,
            "value" => $values[$key],
            "productid" => $product_id,
        ];
        $data[] = $specificData;
    }

    foreach ($data as $specific) {
        $insertData = [
            'ProductId' => $specific['productid'],
            'Title' => $specific['title'],
            'Value' => $specific['value'],
        ];
        if (!$this->db->insert('product_specification_tbl', $insertData)) {
            return false; // Return false on first insertion failure
        }
    }

    return true; 
}


public function savegalleryData($inserted_id)
{
    $config['upload_path'] = './uploads/product/gallery';
    $config['allowed_types'] = 'gif|jpg|png';
    $this->load->library('upload', $config);

    $uploaded_files = [];
    foreach ($_FILES['gallery']['name'] as $key => $filename) {
        $_FILES['userfile']['name'] = $_FILES['gallery']['name'][$key];
        $_FILES['userfile']['type'] = $_FILES['gallery']['type'][$key];
        $_FILES['userfile']['tmp_name'] = $_FILES['gallery']['tmp_name'][$key];
        $_FILES['userfile']['error'] = $_FILES['gallery']['error'][$key];
        $_FILES['userfile']['size'] = $_FILES['gallery']['size'][$key];

        $this->upload->initialize($config);
        if ($this->upload->do_upload('userfile')) {
            $upload_data = $this->upload->data();
            $this->insertGalleryImageIntoDatabase($inserted_id, $upload_data);
        } else {
            $error = ['error' => $this->upload->display_errors()];
            print_r($error);
        }
    }
}



public function updategalleryData($product_id)
{

    $deleteimgs = $this->input->post('deleteimg');

    foreach($deleteimgs as $key => $deleteimg)
    {

        $current_images = $this->db
        ->select('Title')
        ->where('Galleryid', $deleteimg)
        ->get('product_gallery_tbl')
        ->result_array();

        foreach ($current_images as $image) {
        $file_path = './uploads/product/gallery/' . $image['Title'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete file from server

     $this->db->where('Galleryid',$deleteimg);
    $this->db->delete('product_gallery_tbl');

        }

    }
    }

   

    $config['upload_path'] = './uploads/product/gallery';
    $config['allowed_types'] = 'gif|jpg|png';
    $this->load->library('upload', $config);

    $uploaded_files = [];
    foreach ($_FILES['gallery']['name'] as $key => $filename) {
        $_FILES['userfile']['name'] = $_FILES['gallery']['name'][$key];
        $_FILES['userfile']['type'] = $_FILES['gallery']['type'][$key];
        $_FILES['userfile']['tmp_name'] = $_FILES['gallery']['tmp_name'][$key];
        $_FILES['userfile']['error'] = $_FILES['gallery']['error'][$key];
        $_FILES['userfile']['size'] = $_FILES['gallery']['size'][$key];

        $this->upload->initialize($config);
        if ($this->upload->do_upload('userfile')) {
            $upload_data = $this->upload->data();
            $this->insertGalleryImageIntoDatabase($product_id, $upload_data);
        } else {
            $error = ['error' => $this->upload->display_errors()];
            print_r($error);
        }
    }

    

   
}

function insertGalleryImageIntoDatabase($inserted_id, $upload_data)
{
    $insertData = [
        'ProductId' => $inserted_id,
        'Title' => $upload_data['file_name'],
    ];
    $this->db->insert('product_gallery_tbl', $insertData);
}

public function saveproduct()
{
    $productData = [
        'Title' => $this->input->post('title'),
        'Description' => $this->input->post('description'),
        'Category' => $this->input->post('category'),
        'Status' => $this->input->post('status'),
        'VideoUrl' => $this->input->post('video'),
    ];

    $config['upload_path'] = './uploads/product/manual';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 1000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('manual')) {
        $response = ['res' => false, 'message' => $this->upload->display_errors()];
        return false;
    } else {
        $data = ['upload_data' => $this->upload->data()];
        $productData['manual'] = $data['upload_data']['file_name'];
    }

    $savedproduct = $this->db->insert('product_tbl', $productData);
    if (!$savedproduct) {
        echo "Insert failed!";
        return false;
    }

    $inserted_id = $this->db->insert_id();
    $savedspecificdata = $this->savespecificData($inserted_id);
    $savedgalleryData = $this->savegalleryData($inserted_id);

    return $savedproduct && $savedspecificdata && $savedgalleryData;
}

 
public function findProduct($id)
{   
    $this->db->select('product_tbl.*, product_category_tbl.title AS category_title');
    $this->db->from('product_tbl');
    $this->db->join('product_category_tbl', 'product_category_tbl.CatId = product_tbl.Category');
    $this->db->where('product_tbl.ProductId', $id);
    $this->db->where('product_tbl.IsDeleted', 0); // Specify 'product_tbl.IsDeleted' explicitly
    $query = $this->db->get();
    return $query->row();
    
    
}

public function findSpecific($id)
{
    $query = $this->db->get_where('product_specification_tbl',array('ProductId'=> $id));
    return $query->result();
}

public function findGallery($id)
{
    $query = $this->db->get_where('product_gallery_tbl',array('ProductId'=> $id));
    return $query->result();
}

public function updateproduct($id)
{
    $productData = [
        'Title' => $this->input->post('title'),
        'Description' => $this->input->post('description'),
        'Category' => $this->input->post('category'),
        'Status' => $this->input->post('status'),
        'VideoUrl' => $this->input->post('video'),
    ];

    $config['upload_path'] = './uploads/product/manual';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = 1000;

$this->load->library('upload', $config);

// Check if a file was uploaded
if (!empty($_FILES['manual']['name'])) {
    // Perform the upload
    if (!$this->upload->do_upload('manual')) {
        $response = ['res' => false, 'message' => $this->upload->display_errors()];
        return false;
    } else {
        $data = ['upload_data' => $this->upload->data()];
        $productData['manual'] = $data['upload_data']['file_name'];
    }
} 

// Insert into database
$this->db->where('ProductId',$id);
$updateproduct = $this->db->update('product_tbl', $productData);

$updatespecificdata = $this->updatespecificData($id);
$updategallerydata = $this->updategalleryData($id);

return $updateproduct && $updatespecificdata && $updategallerydata;

// Continue with success response or further processing if needed

}

public function deleteproduct($product_id,$data)
{
    $this->db->where('ProductId',$product_id);
    $this->db->update('product_tbl',$data);
    return $this->db->affected_rows() > 0;
}
//=========================Desgination=========================//


//===========================/User============================//
} ?>