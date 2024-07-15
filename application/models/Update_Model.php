<?php date_default_timezone_set('Asia/Kolkata');
class Update_Model extends CI_model
{
    //============================Login===========================//


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

        return $this->db->get('update_category_tbl')->result();
    }

    public function insertProductCategory($data)
    {
        $this->db->insert('update_category_tbl', $data);
        return $this->db->affected_rows() > 0;
    }

    public function findCategory($catId)
    {
        $query = $this->db->get_where('update_category_tbl', array('CatId' => $catId, 'IsDeleted' => '0'));
        return $query->row();
    }

    public function findBlogByCategory($id)
    {
        $this->db->select('bt.*, bct.title AS category_title');
        $this->db->from('blog_tbl as bt');
        $this->db->join('blog_category_tbl as bct', 'bct.CatId = bt.Category');
        $this->db->where('bt.IsDeleted', '0');
        $this->db->where_in('bt.Category', $id);
       

        return  $query = $this->db->get()->result();
    }

    public function updateCategory($catId, $data)
    {
        $this->db->where('CatId', $catId);
        $this->db->update('update_category_tbl', $data);
        return $this->db->affected_rows() > 0;
    }

    public function getAllUpdate($id)
    {

        if (strpos($id, '||') !== false) {
            // Multiple values scenario
            $statuses = explode('||', $id);
        } else {
            // Single value scenario
            $statuses = array($id);
        }

        $this->db->select('ut.*, uct.title AS category_title');
        $this->db->from('update_tbl as ut');
        $this->db->join('update_category_tbl as uct', 'uct.CatId = ut.Category');
      
        $this->db->where_in('ut.Status', $statuses);
       

        return  $query = $this->db->get()->result();
    }

    public function saveupdate($data)
    {
        $this->db->insert('update_tbl', $data);

        // Check if the insertion was successful
        return $this->db->affected_rows() > 0;
    }

    public function findUpdate($updateId)
    {
        $query = $this->db->get_where('update_tbl', array('UpdateId' => $updateId));
        return $query->row();
    }

    public function updateupdates($id, $data)
    {
        $this->db->where('UpdateId', $id);
        $this->db->update('update_tbl', $data);
        return $this->db->affected_rows() > 0;
    }

    public function getlatestblog()
    {
        $this->db->select('bt.*, bct.title AS category_title');
        $this->db->from('blog_tbl as bt');
        $this->db->join('blog_category_tbl as bct', 'bct.CatId = bt.Category');
        $this->db->where('bt.IsDeleted', '0');
        $this->db->where('bt.Status', '1');
        $this->db->order_by('bt.BlogId', 'DESC');
        $this->db->limit(2);

        return  $query = $this->db->get()->result();

        // return $query->result_array();
    }

    public function blogbycategory($category)
    {
        $this->db->select('bt.*, bct.title AS category_title');
        $this->db->from('blog_tbl as bt');
        $this->db->join('blog_category_tbl as bct', 'bct.CatId = bt.Category');
        $this->db->where('bt.IsDeleted', '0');
        $this->db->where_in('bt.Category', $category);
       

        return  $query = $this->db->get()->result();
    }


    public function deleteupdate($id)
    {
        $this->db->where('UpdateId',$id);
        return $this->db->delete('update_tbl');
    }

    //============================Login===========================//

    //===========================/Login===========================//

    //===========================/Login===========================//
}
