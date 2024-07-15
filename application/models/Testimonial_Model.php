<?php date_default_timezone_set('Asia/Kolkata');
class Testimonial_Model extends CI_model{
//============================Login===========================//





public function getAllTestimonial($id)
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
    return $this->db->get('testimonial_tbl')->result();
}

public function savetestimonial($data)
{
    $this->db->insert('testimonial_tbl', $data);

    // Check if the insertion was successful
    return $this->db->affected_rows() > 0;
}

public function findTestimonial($testId)
{
    $query = $this->db->get_where('testimonial_tbl', array('TestId' => $testId));
    return $query->row();
}

public function updatetestimonial($testId,$data)
{
    $this->db->where('TestId',$testId);
    $this->db->update('testimonial_tbl',$data);
    return $this->db->affected_rows();
}

public function deletetestimonial($id)
{
    $this->db->where('TestId',$id);
   return $this->db->delete('testimonial_tbl');
    // return $this->db->affected_rows() > 0;
}

//============================Login===========================//

//===========================/Login===========================//

//===========================/Login===========================//
} ?>