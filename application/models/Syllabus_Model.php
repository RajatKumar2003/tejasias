<?php date_default_timezone_set('Asia/Kolkata');
class Syllabus_Model extends CI_model{
//============================Login===========================//





public function getAllSyllabus()
{

    // $this->db->where(array('IsDeleted'=>'0'));
    return $this->db->get('syllabus_tbl')->result();
}

public function savesyllabus($data)
{
    $this->db->insert('syllabus_tbl', $data);

    // Check if the insertion was successful
    return $this->db->affected_rows() > 0;
}

public function insert($data) {
    // Insert the blog data into the 'blogs' table
    $this->db->insert('syllabus_inquiry', $data);

    // Check if the insertion was successful
    return $this->db->affected_rows() > 0;
}

public function findSyllabus($blogId)
{
    $query = $this->db->get_where('syllabus_tbl', array('SyllabusId' => $blogId));
    return $query->row();
}

public function deletesyllabus($id)
{
    $this->db->where('SyllabusId',$id);
   return $this->db->delete('syllabus_tbl');
    // return $this->db->affected_rows() > 0;
}

//============================Login===========================//

//===========================/Login===========================//

//===========================/Login===========================//
} ?>