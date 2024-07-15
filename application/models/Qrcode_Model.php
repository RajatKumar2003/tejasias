<?php date_default_timezone_set('Asia/Kolkata');
class Qrcode_Model extends CI_model{
//============================Login===========================//





public function getAllGallery()
{

    $this->db->where(array('IsDeleted'=>'0'));
    return $this->db->get('qr_tbl')->result();
}

public function savegallery($data)
{
    $this->db->insert('qr_tbl', $data);

    // Check if the insertion was successful
    return $this->db->affected_rows() > 0;
}

// public function totalqr()
// {

// }

public function findGallery($blogId)
{
    $query = $this->db->get_where('qr_tbl', array('QrId' => $blogId));
    return $query->row();
}

public function deletegallery($id)
{
    $this->db->where('QrId',$id);
   return $this->db->delete('qr_tbl');
    // return $this->db->affected_rows() > 0;
}

//============================Login===========================//

//===========================/Login===========================//

//===========================/Login===========================//
} ?>