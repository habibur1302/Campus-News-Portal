<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Campus24- <?php echo $title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/coin-slider.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/cufon-aller.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
          <img src="<?php echo base_url()?>/images/logo/logo.png" height='82'style="margin-top:15px " >
	  
       
      </div>
      <div class="menu_nav">
        <ul>
            <li class="active"><a href="<?php echo base_url();?>"><span>Home </span></a></li>
            <li><a href="<?php echo base_url();?>welcome/event"><span>Events</span></a></li>
            <li><a href="<?php echo base_url();?>welcome/gallery"><span>Gallery</span></a></li>
          <li><a href="<?php echo base_url();?>welcome/support"><span>About</span></a></li>
          <?php
          $user_id=$this->session->userdata('user_id');
          if($user_id == NULL)
          {
          ?>
          <li><a href="<?php echo base_url();?>welcome/user_signup"><span>SIgn Up</span></a></li>
          <li><a href="<?php echo base_url();?>welcome/user_login"><span>Login</span></a></li>
          <?php } 
          else{
          ?>
          <li><a href="<?php echo base_url();?>welcome/user_logout"><span>Logout</span></a></li>
          <?php }?>
        </ul>
      </div>
      <div class="clr"></div>
      <?php
            if($slider)
            {
      ?>
	  
	
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="<?php echo base_url();?>images/slide1.JPG" width="935" height="307" alt="" /> </a> <a href="#"><img src="<?php echo base_url();?>images/slide2.JPG" width="935" height="307" alt="" /> </a> <a href="#"><img src="<?php echo base_url();?>images/slide3.JPG" width="935" height="307" alt="" /> </a> <a href="#"><img src="<?php echo base_url();?>images/slide4.JPG" width="935" height="307" alt="" /> </a><a href="#"><img src="<?php echo base_url();?>images/slide5.JPG" width="935" height="307" alt="" /> </a><a href="#"><img src="<?php echo base_url();?>images/slide6.JPG" width="935" height="307" alt="" /> </a></div>
        <div class="clr"></div>
      </div>
	  
	 
            <?php } ?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <?php echo $maincontent;?>
      </div>
      <div class="sidebar">
        
          <div class="searchform">
              <h3> <?php   
              $name=$this->session->userdata('user_name');
              if($name)
              {
                  echo 'Hello, '. $name;
              }
              ?>
              
              </h3>
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
                
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="<?php echo base_url();?>images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>News Category</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
           <?php
            foreach($all_published_category as $v_category)
            {
           ?>
              <li><a href="<?php echo base_url();?>welcome/category_blog/<?php echo $v_category->category_id?>"><?php echo $v_category->category_name?></a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Recent News</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
              <?php 
                foreach($recent_post as $v_post)
                {
              ?>
              <li><a href="<?php echo base_url();?>welcome/recent_blog/<?php echo $v_post->blog_id?>"><?php echo $v_post->blog_title?></a></li>
                <?php } ?>
          </ul>
        </div>
		
		<div class="gadget">
          <h2 class="star"><span>Most Popular News</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
              <?php 
                foreach($populer_blog as $v_blog)
                {
              ?>
              <li><a href="<?php echo base_url();?>welcome/populer_blog/<?php echo $v_blog->blog_id?>"><?php echo $v_blog->blog_title?></a></li>
                <?php } ?>
          </ul>
        </div>
      
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">

      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
       
        <p class="contact_info"> <span>Address:</span> PSTU,Dumki,Patuakhali<br />
          <span>Telephone:</span> 01779488622<br />
         
          
          <span>E-mail:</span> <a href="#">momin@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">Campus24</a>.</p>
    
      <div style="clear:both;"></div>
    </div>
  </div>
</div>

</html>
