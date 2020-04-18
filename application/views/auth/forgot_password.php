<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $this->load->view('include/head');
    ?>
</head>

<body id="">
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
         <h1>Lupa Kata Sandi</h1>
         <p><center>Silakan masukan email anda, kami akan mengirimkan email untuk mengubah kata sandi</center></p>
         <br>
						
        <?= form_open('auth/forgot_password/', array('class'=>'m-t-20'));?>
            <div class="form-group">
		      <input type="email" name="identity" required="" class="form-control" placeholder="E-mail">
	      </div>
		</div>
      <br>
				<!-- /middle-wizard -->
                <div class="form-group text-center row m-t-10">
                    <div class="col-12">
                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Kirim</button>
                    </div>
                </div>
				<!-- /bottom-wizard -->
            </form>
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
</html> -->
<!-- 
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?> -->
