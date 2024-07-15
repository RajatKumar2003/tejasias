<?php date_default_timezone_set('Asia/Kolkata');
class Inquiry_Model extends CI_model{
//============================Login===========================//


public function getAllContact()
{
    $this->db->where('isdeleted','0');
   return $this->db->get('contact_tbl')->result();
}

public function getAllProductInquiry()
{
    $this->db->select('inquiry_tbl.*, product_category_tbl.title AS category_title,product_tbl.title As product_title');
    $this->db->from('inquiry_tbl');
    $this->db->join('product_tbl', 'product_tbl.ProductId = inquiry_tbl.InqProduct');
    $this->db->join('product_category_tbl', 'product_category_tbl.CatId = product_tbl.Category');
    $this->db->where('inquiry_tbl.InqIsDeleted', 0);
    $query = $this->db->get();
    return $query->result();
    
}

public function findSeo($Id)
{
    $query = $this->db->get_where('seo_tbl', array('SeoId' => $Id));
    return $query->row();
}

public function updateSeo($catId,$data)
{
    $this->db->where('SeoId',$catId);
    $this->db->update('seo_tbl',$data);
    return $this->db->affected_rows() > 0;
}

public function deleteinquiry($id,$data)
{
    $this->db->where('InqId',$id);
    $this->db->update('inquiry_tbl',$data);
    return $this->db->affected_rows() > 0;
}

public function deletecontact($id,$data)
{
    $this->db->where('ContactId',$id);
    $this->db->update('contact_tbl',$data);
    return $this->db->affected_rows() > 0;
}


public function TotalProductInquiry()
{
    $this->db->select('COUNT(*) as total_rows');
    $this->db->select_max('InqCreatedAt', 'latest_created_at');
    $query = $this->db->get('inquiry_tbl');
    return $query->row();
    
}

public function TotalContactInquiry()
{
    $this->db->select('COUNT(*) as total_rows');
    $this->db->select_max('Crerated', 'latest_created_at');
    $this->db->where('isdeleted','0');
    $query = $this->db->get('contact_tbl');
    return $query->row();
    
}


public function addcontact($data)
{
  
    $this->db->insert('contact_tbl',$data);
    return $this->db->affected_rows() > 0;
}
//============================Login===========================//

//===========================/Login===========================//

//===========================/Login===========================//
} ?>