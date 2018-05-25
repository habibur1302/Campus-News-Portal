<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['all_published_blog']=$this->welcome_model->select_all_published_blog();
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
                        $data['populer_blog']=$this->welcome_model->select_populer_blog();
                        
                        $data['maincontent']=$this->load->view('home_page_content',$data,true);
                        $data['slider']=1;
                        $data['title']='Home';
                        $this->load->view('master',$data);
	}
	
		public function gallery()
	{
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['all_published_image']=$this->welcome_model->select_all_published_image();
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
                        $data['populer_blog']=$this->welcome_model->select_populer_blog();
                        
                        $data['maincontent']=$this->load->view('gallery',$data,true);
                        $data['slider']='';
                        $data['title']='Home';
                        $this->load->view('master',$data);
	}
	
	
                    public function support()
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['all_published_event']=$this->welcome_model->select_all_published_event();
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
                        $data['populer_blog']=$this->welcome_model->select_populer_blog();
                        $data['maincontent']=$this->load->view('support_page','',true);
                        $data['slider']='';
                        $data['title']='Support';
                        $this->load->view('master',$data);
                    }
                    
                    public function event()
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['all_published_event']=$this->welcome_model->select_all_published_event();
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
                        $data['populer_blog']=$this->welcome_model->select_populer_blog();
                        
                        $data['maincontent']=$this->load->view('event',$data,true);
                        $data['slider']='';
                        $data['title']='Home';
                        $this->load->view('master',$data);
                    }
                    
                    public function blog_details($blog_id)
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['blog_info']=$this->welcome_model->blog_info_by_id($blog_id);
                        
                         $data['all_published_blog']=$this->welcome_model->select_all_published_blog();
                        $hit_count=$data['blog_info']->hit_count + 1;
                        $this->welcome_model->update_hit_count($hit_count,$blog_id);
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
						$data['populer_blog']=$this->welcome_model->select_populer_blog();
                        $data['blog_comments']=$this->welcome_model->select_comments_by_blog_id($blog_id);
                        $data['maincontent']=$this->load->view('blog_details',$data,true);
                        $data['slider']='';
                        $data['title']='Support';
                        $this->load->view('master',$data);
                    }
                    public function category_blog($category_id)
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['blog_by_id']=$this->welcome_model->select_blog_by_category_id($category_id);
                         $data['recent_post']=$this->welcome_model->select_recent_blog();
						 $data['populer_blog']=$this->welcome_model->select_populer_blog();
                        $data['maincontent']=$this->load->view('category_blog',$data,true);
                        $data['slider']='';
                        $data['title']='Support';
                        $this->load->view('master',$data);
                    }
					
					 public function recent_blog($blog_id)
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['blog_by_id']=$this->welcome_model->select_blog_by_blog_id($blog_id);
                         $data['recent_post']=$this->welcome_model->select_recent_blog();
						 $data['populer_blog']=$this->welcome_model->select_populer_blog();
                        $data['maincontent']=$this->load->view('category_blog',$data,true);
                        $data['slider']='';
                        $data['title']='Support';
                        $this->load->view('master',$data);
                    }
					public function populer_blog($blog_id)
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['blog_by_id']=$this->welcome_model->select_blog_by_blog_id($blog_id);
                         $data['recent_post']=$this->welcome_model->select_recent_blog();
						 $data['populer_blog']=$this->welcome_model->select_populer_blog();
                        $data['maincontent']=$this->load->view('category_blog',$data,true);
                        $data['slider']='';
                        $data['title']='Support';
                        $this->load->view('master',$data);
                    }
					
                    public function user_signup()
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                       
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
                        $data['maincontent']=$this->load->view('user_signup',$data,true);
                        $data['slider']='';
                        $data['title']='Home';
                        $this->load->view('master',$data);
                    }
                    public function save_user()
                    {
                        $data=array();
                        $data['user_name']=$this->input->post('user_name',true);
                        $data['email_address']=$this->input->post('email_address',true);
                        $data['password']=md5($this->input->post('password',true));
                        $data['age']=$this->input->post('age',true);
                        $this->welcome_model->save_user_info($data);
                        $sdata=array();
                        $sdata['message']='Save User Information Successfully ! You may Login Now ';
                        $this->session->set_userdata($sdata);
                        redirect('welcome/user_signup');
                        
                    }
                    public function user_login()
                    {
                        $data=array();
                        $data['all_published_category']=$this->welcome_model->select_all_published_category();
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
                        $data['recent_post']=$this->welcome_model->select_recent_blog();
                        $data['maincontent']=$this->load->view('user_login',$data,true);
                        $data['slider']='';
                        $data['title']='Home';
                        $this->load->view('master',$data);
                    }
                    public function check_user_login()
                    {
                        $email_address=$this->input->post('email_address');
                        $password=$this->input->post('password');
                        
                       $result= $this->welcome_model->check_user_login_info($email_address,$password);
                      $sdata=array();
                       if($result)
                       {
                           
                           $sdata['user_name']=$result->user_name;
                           $sdata['email_address']=$result->email_address;
                           $sdata['user_id']=$result->user_id;
                           $this->session->set_userdata($sdata);
                           redirect('welcome');
                       }
                       else{
                           $sdata['message']='User Id / Password Invalide';
                           $this->session->set_userdata($sdata);
                           redirect('welcome/user_login');
                       }
                    }
                    public function user_logout()
                    {
                        $this->session->unset_userdata('user_name');
                        $this->session->unset_userdata('user_id');
                        redirect('welcome','refresh');
                    }
                    public function save_comments()
                    {
                        $data=array();
                        $data['blog_id']=$this->input->post('blog_id');
                        $data['comments_author_name']=$this->session->userdata('user_name');
                        $data['comments_author_email']=$this->session->userdata('email_address');
                        $data['comments']=$this->input->post('comments');
                        $this->welcome_model->save_blog_comments($data);
                        $sdata=array();
                        $sdata['message']='Your Comments successfully Save but Weatig for admin Approval !';
                        $this->session->set_userdata($sdata);
                        redirect('welcome/blog_details/'.$this->input->post('blog_id'));
                    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */