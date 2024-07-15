<?php date_default_timezone_set('Asia/Kolkata');
class Blog_Model extends CI_model
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

        return $this->db->get('blog_category_tbl')->result();
    }

    public function insertProductCategory($data)
    {
        $this->db->insert('blog_category_tbl', $data);
        return $this->db->affected_rows() > 0;
    }

    public function findCategory($catId)
    {
        $query = $this->db->get_where('blog_category_tbl', array('CatId' => $catId, 'IsDeleted' => '0'));
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
        $this->db->update('blog_category_tbl', $data);
        return $this->db->affected_rows() > 0;
    }

    public function getAllBlog($id)
    {

        if (strpos($id, '||') !== false) {
            // Multiple values scenario
            $statuses = explode('||', $id);
        } else {
            // Single value scenario
            $statuses = array($id);
        }

        $this->db->select('bt.*, bct.title AS category_title');
        $this->db->from('blog_tbl as bt');
        $this->db->join('blog_category_tbl as bct', 'bct.CatId = bt.Category');
        $this->db->where('bt.IsDeleted', '0');
        $this->db->where_in('bt.Status', $statuses);
       

        return  $query = $this->db->get()->result();
    }

    public function saveblog($data)
    {
        $this->db->insert('blog_tbl', $data);

        // Check if the insertion was successful
        return $this->db->affected_rows() > 0;
    }

    public function findBlog($blogId)
    {
        $query = $this->db->get_where('blog_tbl', array('BlogId' => $blogId, 'IsDeleted' => '0'));
        return $query->row();
    }

    public function updateblog($id, $data)
    {
        $this->db->where('BlogId', $id);
        $this->db->update('blog_tbl', $data);
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

    //============================Login===========================//

    //===========================/Login===========================//

    //===========================/Login===========================//
}
