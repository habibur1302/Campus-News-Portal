<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Campus24</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
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
		
</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Campus24 Admin Panel</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
                                            <h3 style="color: red"> 
                                                <?php
                                                    $msg=$this->session->userdata('message');
                                                    if($msg)
                                                    {
                                                        echo $msg;
                                                        $this->session->unset_userdata('message');
                                                    }
                                                
                                                ?>
                                            </h3>
					</div>
                                    <form class="form-horizontal" action="<?php echo base_url();?>admin/check_admin_login" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="admin_email_address" id="username" type="text" value="admin" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="admin_password" id="password" type="password" value="admin123456" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
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
