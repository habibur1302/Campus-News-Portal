<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Super_Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id ==NULL)
        {
            redirect('admin','refresh');
        }
          $this->load->model('super_admin_model','sa_model');
    }
    
    public function index()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('admin/dashbord','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function add_category()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('admin/add_category_form','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_category()
    {
        $data=array();
        $data['category_name']=$this->input->post('category_name',true);
        $data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
      
        $this->sa_model->save_category_info($data);
        $sdata=array();
        $sdata['message']='Save Category Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_category');
    }
    public function manage_category()
    {
        $data=array();
        $data['all_category']=$this->sa_model->select_all_category();
        $data['admin_main_content']=$this->load->view('admin/manage_category',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function manage_comments()
    {
        $data=array();
        $data['all_comments']=$this->sa_model->select_all_comments();
        $data['admin_main_content']=$this->load->view('admin/manage_comments',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function published_category($category_id)
    {
       
        $this->sa_model->update_publication_status_by_id($category_id);
        redirect('super_admin/manage_category');
    }
  public function unpublished_category($category_id)
    {
       
        $this->sa_model->update_unpublication_status_by_id($category_id);
        redirect('super_admin/manage_category');
    }
    public function published_comments($comments_id)
    {
       
        $this->sa_model->update_publication_commentsstatus($comments_id);
        redirect('super_admin/manage_comments');
    }
  public function unpublished_comments($comments_id)
    {
       
        $this->sa_model->update_unpublication_commentsstatus($comments_id);
        redirect('super_admin/manage_comments');
    }
    public function logout()
    {
        $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('admin_id');
        $sdata=array();
        $sdata['message']='You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('admin');
        
    }
    public function edit_category($category_id)
    {
        $data=array();
        $data['category_info']=$this->super_admin_model->select_category_info_by_id($category_id);
        $data['admin_main_content']=$this->load->view('admin/edit_category',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_category()
    {
        $data=array();
        $category_id=$this->input->post('category_id');
        $data['category_name']=$this->input->post('category_name');
        $data['category_description']=$this->input->post('category_description');
        $data['publication_status']=$this->input->post('publication_status');
        $this->super_admin_model->update_category_info($data,$category_id);
        redirect('super_admin/manage_category');
    }

    public function delete_category($category_id)
    {
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }
    public function add_blog()
    {
        
        $data=array();
        $data['all_published_category']=$this->welcome_model->select_all_published_category();
        $data['admin_main_content']=$this->load->view('admin/add_blog_form',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
     public function add_event()
    {
        
        $data=array();
        $data['all_published_']=$this->welcome_model->select_all_published_event();
        $data['admin_main_content']=$this->load->view('admin/add_event',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
      public function save_event()
    {
        $data=array();
        $data['event_name']=$this->input->post('event_name',true);
        $data['event_description']=$this->input->post('event_description',true);
        $data['ticket_price']=$this->input->post('ticket_price',true);
        $data['publication_status']=$this->input->post('publication_status',true);
      
        $this->sa_model->save_event_info($data);
        $sdata=array();
        $sdata['message']='Save Category Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_event');
    }
    
    
    public function save_blog()
    {
        $data=array();
        $data['blog_title']=$this->input->post('blog_title',true);
        $data['category_id']=$this->input->post('category_id',true);
      $data['blog_short_description']=$this->input->post('blog_short_description',true);
        $data['blog_long_description']=$this->input->post('blog_long_description',true);
    
               
        $data['author_name']=$this->session->userdata('full_name');
        
         $data['publication_status']=$this->input->post('publication_status',true);
        
         /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '1024';
        $config['max_height'] = '720';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * --------End Image Upload---------
         */
        
//        $config['upload_path'] = 'gallery/';
//        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|ppt|pptx';
//        $config['max_size'] = '10000';
//
//
//        $this->load->library('upload', $config);
//        $this->upload->initialize($config);
//        $error = '';
//        $fdata = array();
//        if (!$this->upload->do_upload('image')) {
//            $error = $this->upload->display_errors();
//            echo $error;
//            exit();
//        } else {
//            $fdata = $this->upload->data();
//            $data['file_location'] = $config['upload_path'] . $fdata['file_name'];
//        } 
        

        
        
      
       $this->super_admin_model->save_blog_info($data);
       $sdata=array();
       $sdata['message']="Save Blog Information Successfully !";
       $this->session->set_userdata($sdata);
       redirect('super_admin/add_blog');
    }
    public function manage_blog(){
        
         $data = array();

        $data['all_blog'] = $this->super_admin_model->select_all_blog();
        $data['admin_main_content'] = $this->load->view('admin/manage_blog',$data, true);
        $this->load->view('admin/admin_master', $data);
        
    }
    
    public function published_blog($blog_id) {

        $this->sa_model->update_publication_blogstatus($blog_id);
        redirect('super_admin/manage_blog');
    }
    
    
    public function unpublished_blog($blog_id){
         $this->sa_model->update_unpublication_blogstatus($blog_id);
        redirect('super_admin/manage_blog');
    }
    
    public function delete_blog($blog_id){
        
         $this->sa_model->delete_blog_data($blog_id);
        redirect('super_admin/manage_blog');
    }
    
    public function edit_blog($blog_id){
        
        $data=array();
     
       $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['select_blog']=$this->sa_model->select_blog_by_id($blog_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_blog',$data, true);
        $this->load->view('admin/admin_master', $data);
        
    }
    public function update_blog(){
        
        $data=array();
        $blog_id= $this->input->post('blog_id');
        $data['blog_title']=$this->input->post('blog_title');
        $data['category_id']=$this->input->post('category_id');
        $data['blog_short_description']=$this->input->post('blog_short_description');
        $data['blog_long_description']=$this->input->post('blog_long_description');
        $data['publication_status']=$this->input->post('publication_status');
        
        
        $this->sa_model->update_blogstate($data,$blog_id);
        redirect('super_admin/manage_blog');
    }
   
}
