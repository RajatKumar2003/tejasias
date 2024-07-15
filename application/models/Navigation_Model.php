<?php date_default_timezone_set('Asia/Kolkata');
class Navigation_Model extends CI_model{
//============================Login===========================//


public function getAllParent($id)
{
    if (strpos($id, '||') !== false) {
        // Multiple values scenario
        $statuses = explode('||', $id);
    } else {
        // Single value scenario
        $statuses = array($id);
    }

    // $this->db->where('IsDeleted', '0');
    $this->db->where_in('MCatStatus', $statuses);

    return $this->db->get('menu_category_tbl')->result();
}


public function getAllMenu($id)
{
    if (strpos($id, '||') !== false) {
        // Multiple values scenario
        $statuses = explode('||', $id);
    } else {
        // Single value scenario
        $statuses = array($id);
    }

    // $this->db->where('IsDeleted', '0');
    $this->db->where_in('MStatus', $statuses);

    return $this->db->get('menu_tbl')->result();
}


public function findParent($Id)
{
    $query = $this->db->get_where('menu_category_tbl', array('MCatId' => $Id));
    return $query->row();
}




public function updateparentlink($catId,$data)
{
    $this->db->where('MCatId',$catId);
    $this->db->update('menu_category_tbl',$data);
    return $this->db->affected_rows();
}

public function deleteparentlink($id)
{
    $this->db->where('MCatId',$id);
    return $this->db->delete('menu_category_tbl');
}

public function insertParentLink($data)
{
    $this->db->insert('menu_category_tbl',$data);
    return $this->db->affected_rows() > 0;
}

public function insertMenuLink($data)
{
    $this->db->insert('menu_tbl',$data);
    return $this->db->affected_rows() > 0;
}

public function findMenu($Id)
{
    $query = $this->db->get_where('menu_tbl', array('MId' => $Id));
    return $query->row();
}

public function updatemenulink($catId,$data)
{
    $this->db->where('MId',$catId);
    $this->db->update('menu_tbl',$data);
    return $this->db->affected_rows();
}

public function deletemenulink($id)
{
    $this->db->where('MId',$id);
    return $this->db->delete('menu_tbl');
}


public function  findnavbyslug($slug)
{
    $query = $this->db->get_where('menu_category_tbl', array('MCatSlug' => $slug));
    return $query->row();
}
//============================Login===========================//

//===========================/Login===========================//

//===========================/Login===========================//
} ?>