<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id !=NULL)
        {
            redirect('super_admin','refresh');
        }
    }
    
    public function index()
    {
        $this->load->view('admin/admin_login');
    }
    public function check_admin_login()
    {
        $admin_email_address=$this->input->post('admin_email_address',true);
        $admin_password=$this->input->post('admin_password',true);
        $this->load->model('admin_model','a_model');
       $result= $this->a_model->check_admin_login_info($admin_email_address,$admin_password);
//       echo '<pre>';
//       print_r($result);
//       exit();
       $sdata=array();
       
       if($result)
       {
           $sdata['full_name']=$result->admin_full_name;
           $sdata['admin_id']=$result->admin_id;
           $this->session->set_userdata($sdata);
           //$sdata[]
           redirect('super_admin');
       }
       else{
           $sdata['message']='Your User Id / Password Invalide !';
           $this->session->set_userdata($sdata);
           $this->load->view('admin/admin_login');
       }
    }
    
}






