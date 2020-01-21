
<link href="<?php echo base_url('assets/css1/bootstrap.min.css');?>" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo base_url('assets/js1/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/jquery1/jquery.min.js');?>"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css1/bootstrap413.min.css');?>" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css1/all.css');?>" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css1/style.css'); ?>">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3><?php echo lang('login_heading');?></h3>
			<p style="color:white"><?php echo "Entrez vos paramètres pour démarrer une session" //lang('login_subheading');?></p>
				
			</div>
			<div class="card-body">
			
			<div id="infoMessage" style="color:white"><?php echo $message;?></div>
				<?php echo form_open("auth/login");?>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
							<?php //echo lang('login_identity_label', 'identity');?>
							<?php 
								$identity = array(
								'name'        => 'identity',
									'type'        => 'text',
								  'class'       => 'form-control',
								  'placeholder' => 'username'
								);echo form_input($identity);?>
						  
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
							<?php //echo lang('login_password_label', 'password');?>
							<?php 
								$password = array(
								'name'        => 'password',
									'type'        => 'password',
								  'class'       => 'form-control',
								  'placeholder' => 'password'
								);echo form_input($password);?>
					</div>
					<div class="row align-items-center remember">
							<?php //echo lang('login_remember_label', 'remember');?>
							<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember Me
						 
					</div>
					<div class="form-group">
						<?php 
								$sub = array(
									'type'        => 'submit',
									'value'        => 'Login',
								  'class'       => 'btn float-right login_btn'
								);echo form_submit($sub);?>
					</div>
				<?php echo form_close();?>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>