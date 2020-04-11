<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $this->load->view('include/head');
    ?>
</head>

<body id="admission_bg">
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="form_container" class="clearfix">
		<figure>
			<a href="<?=base_url('home')?>"><img src="<?=base_url("assets/img/logo.png")?>" width="100" height="100" data-retina="true" alt=""></a>
		</figure>
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
				<div id="middle-wizard">

				<div id="intro">
         <h1>Sign In</h1>
         <h1><br>   </h1>
						
        <?= form_open('auth/login/', array('class'=>'m-t-20'));?>
        <div class="form-group">
				<input type="text" name="identity" required="" class="form-control" placeholder="Username">
					</div>
						<div class="form-group">
							<input type="password" name="password" required="" class="form-control" placeholder="**********">
						</div>
					</div>

				<!-- /middle-wizard -->
                <div class="form-group text-center row m-t-10">
                    <div class="col-12">
                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sign In</button>
                    </div>
                </div>
				<!-- /bottom-wizard -->
            </form>
                <a href="<?=base_url('auth/forgot_password')?>" class="text-muted"><center>Lupa Kata Sandi?</center></a><br>
                <center>Belum punya akun?  <a href="<?=base_url('modul/add_user')?>" class="text-muted"><u>Klik disini</u></a></center>           
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->

	
	<!-- COMMON SCRIPTS -->
    <?php
        $this->load->view('include/javascript');
    ?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?=base_url("assets/js/jquery-ui-1.8.22.min.js")?>"></script>
	<script src="<?=base_url("assets/js/jquery.wizard.js")?>"></script>
	<script src="<?=base_url("assets/js/jquery.validate.js")?>"></script>
	<script src="<?=base_url("assets/js/admission_func.js")?>"></script>
  
</body>
</html>
<!-- 
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->