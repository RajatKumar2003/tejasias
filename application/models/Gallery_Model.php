<?php date_default_timezone_set('Asia/Kolkata');
class Gallery_Model extends CI_model{
//============================Login===========================//





public function getAllGallery()
{

    $this->db->where(array('IsDeleted'=>'0'));
    return $this->db->get('gallery_tbl')->result();
}

public function savegallery($data)
{
    $this->db->insert('gallery_tbl', $data);

    // Check if the insertion was successful
    return $this->db->affected_rows() > 0;
}

public function findGallery($blogId)
{
    $query = $this->db->get_where('gallery_tbl', array('GalleryId' => $blogId));
    return $query->row();
}

public function deletegallery($id)
{
    $this->db->where('GalleryId',$id);
   return $this->db->delete('gallery_tbl');
    // return $this->db->affected_rows() > 0;
}

//============================Login===========================//

//===========================/Login===========================//

//===========================/Login===========================//
} ?>