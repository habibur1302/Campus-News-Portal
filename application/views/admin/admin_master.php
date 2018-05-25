<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Free Campus24 Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
        <script type="text/javascript" src="<?php echo base_url();?>js/jsval.js"></script>
	<link  href="<?php echo base_url()?>asset/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url()?>asset/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>asset/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url()?>asset/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url()?>asset/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url()?>asset/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
        <script type="text/javascript">
            function check_delete()
            {
                var chk=confirm('Are You Sure to Delete This ?');
                if(chk)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url()?>/images/logo/tunecraft.jpg" /> <span></span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $this->session->userdata('full_name')?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
                                                <li><a href="<?php echo base_url();?>super_admin/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="<?php echo base_url()?>">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>super_admin"><i class="icon-home"></i><span class="hidden-tablet"> Dashbord</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_category"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Category</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_category"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Category</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_blog"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add image</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_blog"><i class="icon-font"></i><span class="hidden-tablet"> Manage image</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_comments"><i class="icon-font"></i><span class="hidden-tablet"> Manage Comments</span></a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_event"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add Event</span></a></li>
						
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			
			<div id="content" class="span10">
			<!-- content starts -->
                            
                                                       <?php echo $admin_main_content;?>
                        
			<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url()?>asset/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url()?>asset/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url()?>asset/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url()?>asset/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url()?>asset/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url()?>asset/js/excanvas.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url()?>asset/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url()?>asset/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url()?>asset/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url()?>asset/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url()?>asset/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url()?>asset/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url()?>asset/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url()?>asset/js/charisma.js"></script>
	
		
</body>
</html>
