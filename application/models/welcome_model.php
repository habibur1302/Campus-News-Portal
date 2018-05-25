<?php

class Welcome_Model extends CI_Model {
    //put your code here
    public function select_all_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    public function select_all_published_blog()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by('blog_id','desc');
        $this->db->limit(5);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    public function select_all_published_image()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by('blog_id');
//        $this->db->limit(5);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
   
    
    public function blog_info_by_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
    
    public function select_all_published_event()
    {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('publication_status',1);
        $this->db->order_by('event_id','desc');
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    public function select_blog_by_category_id($category_id)
    {
         $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
	public function select_blog_by_blog_id($blog_id)
    {
         $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
	
    public function select_recent_blog()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->order_by('blog_id','desc');
        $this->db->limit(5);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    public function save_user_info($data)
    {
        $this->db->insert('tbl_user',$data);
    }
    public function check_user_login_info($email_address,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_address',$email_address);
        $this->db->where('password',md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
    public function save_blog_comments($data)
    {
        $this->db->insert('tbl_comments',$data);
    }
    public function select_comments_by_blog_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('blog_id',$blog_id);
        $this->db->where('publication_status',1);
        
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    public function update_hit_count($hit_count,$blog_id)
    {
        $this->db->set('hit_count',$hit_count);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
    }
    public function select_populer_blog()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by('hit_count','desc');
        $this->db->limit(5);
        
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
}
