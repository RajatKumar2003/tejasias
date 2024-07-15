<?php date_default_timezone_set('Asia/Kolkata');
class Seo_Model extends CI_model{
//============================Login===========================//



public function findSeo($Id)
{
    $query = $this->db->get_where('seo_tbl', array('SeoId' => $Id));
    return $query->row();
}

public function updateSeo($catId,$data)
{
    $this->db->where('SeoId',$catId);
    return $this->db->update('seo_tbl',$data);
    // return $this->db->affected_rows() > 0;
}

public function insertFileData($fileName, $seoId, $filetype) {
    $data = array(
        'SiteMap'=> "hello",
    ); // Initialize $data array

    // if ($filetype == "sitemap") {
    //     $data['SiteMap'] = $fileName;
    // } elseif ($filetype == "logo") {
    //     $data['Logo'] = $fileName;
    // } elseif ($filetype == "favicon") {
    //     $data['Favicon'] = $fileName;
    // }

    $this->db->where('SeoId', $seoId);
    // $this->db->set($data);
    $this->db->update('seo_tbl', $data); // Perform the update with $data array

    return ($this->db->affected_rows() > 0); // Return true if update was successful
}




// =======Login===========================//

//===========================/Login===========================//

//===========================/Login===========================//
} ?>