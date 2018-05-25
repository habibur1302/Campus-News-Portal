<?php

class Super_Admin_Model extends CI_Model {
    
    public function save_category_info($data)
    {
        $this->db->insert('tbl_category',$data);
    }
    
     public function save_event_info($data)
    {
        $this->db->insert('tbl_event',$data);
    }
    public function select_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    public function select_all_comments()
    {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    
    
    public function update_publication_status_by_id($category_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
        
        
    }
    public function update_unpublication_status_by_id($category_id)
    {
        
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
     }
    public function update_publication_commentsstatus($comments_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
        
        
    }
    public function update_unpublication_commentsstatus($comments_id)
    {
        
        $this->db->set('publication_status',0);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
     }
     public function delete_category_by_id($category_id)
     {
         $this->db->where('category_id',$category_id);
         $this->db->delete('tbl_category');
     }
     public function update_category_info($data,$category_id)
     {
         $this->db->where('category_id',$category_id);
         $this->db->update('tbl_category',$data);
         
     }
      public function select_blog_by_id($blog_id){
          $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
     public function save_blog_info($data)
     {
         $this->db->insert('tbl_blog',$data);
     }
     public function select_category_info_by_id($category_id)
     {
         $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
     }
     public function select_all_blog(){
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->order_by('blog_id','desc');
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    
    public function update_publication_blogstatus($blog_id){
        $this->db->set('publication_status',1);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
        
    }
    
    public function update_unpublication_blogstatus($blog_id){
        $this->db->set('publication_status',0);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
    }
    
    public function delete_blog_data($blog_id){
        
        $this->db->where('blog_id',$blog_id);
        $this->db->delete('tbl_blog');
        
        
    }
    
    public function update_blogstate($data,$blog_id){
        
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog',$data);
        
    }
}
