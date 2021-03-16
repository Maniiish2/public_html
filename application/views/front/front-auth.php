<style type="text/css">
	.l_ogin_form {
    padding: 86px 0;
    background: #eee;
}
.register-logo h2 {
    text-align: center;
    font-weight: 700;
    font-size: 43px;
}
.login-logo h2 {
    text-align: center;
    font-weight: 700;
    font-size: 43px;
}
.card_form {
    height: 680px;
}
.input100:focus{
	border: 1px solid #30a2a2 !important;
}
</style>


<section class="l_ogin_form"> 
<div class="container">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="mass_age">
            <?php $this->load->view('admin/includes/_messages.php') ?>
            </div>
        </div>
    </div>
 
<div class="row">
    
	<div class="col-md-6">
		<div class=" card-body card form-background card_form"> 
  <div class="register-box">
    <div class="register-logo">
      <h2>Register</a></h2>
      <br>
    </div>

    <div class="card1">
      <div class=" register-card-body">


       

        <?php echo form_open(base_url('auth/register'), 'class="login-form" '); ?>
          <div class="form-group has-feedback">
             <input type="text" name="username" id="name" value="<?= old("username"); ?>" class="input100" placeholder="<?= trans('username') ?>" >
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="firstname" id="firstname" value="<?= old("firstname"); ?>" class="input100" placeholder="<?= trans('firstname') ?>" >
          </div>
          <div class="form-group has-feedback">
           <input type="text" name="lastname" id="lastname" value="<?= old("lastname"); ?>" class="input100" placeholder="<?= trans('lastname') ?>" >
          </div>
          <div class="form-group has-feedback">
             <input type="text" name="email" id="email" value="<?= old("email"); ?>" class=" input100" placeholder="<?= trans('email') ?>" >
          </div>
          <div class="form-group has-feedback">
             <input type="password" name="password" id="password" class="input100" placeholder="<?= trans('password') ?>" >
          </div>
          <div class="form-group has-feedback">
              <input type="password" name="confirm_password" id="confirm_password" class=" input100" placeholder="<?= trans('confirm') ?>" >
          </div>
          <div class="row">

            <div class="col-12">
              <!-- <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> <?= trans('i_agree_to_the') ?> <a href="#"><?= trans('terms') ?></a>
                </label>
              </div>
 -->
 				<br>
              	<div class="container-login100-form-btn">
					
					<input type="submit" name="submit" id="submit" class="login100-form-btn" value="<?= trans('register') ?>">


				</div>
            </div>




            <?php if($this->recaptcha_status): ?>
              <div class="recaptcha-cnt">
                  <?php generate_recaptcha(); ?>
              </div>
            <?php endif; ?>
            <!-- /.col -->
           
          </div>
        <?php echo form_close(); ?>

      <div class="row">
      	<!-- <div class="col-md-12">
      		<div class="btn text-center" style="width: 100%">
      			  <a href="<?= base_url('admin/auth/login'); ?>" class="text-center"><?= trans('i_already_have_membership') ?></a>
      		</div>
      	</div> -->
      </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
</div>
</div>




	<div class="col-md-6">

<div class=" card-body card form-background card_form">
  <div class="login-box">
    <div class="login-logo">
      <h2>Login</h2>
      <br>
    </div>
    <!-- /.login-logo -->
    <div class="card1">
      <div class="login-card-body">
        

        <?php //$this->load->view('admin/includes/_messages.php') ?>
        
        <?php echo form_open(base_url('auth/login'), 'class="login-form" '); ?>
          <div class="form-group has-feedback">
            <input type="text" name="username" id="name" class="input100" placeholder="<?= trans('username') ?>" >
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="input100" placeholder="<?= trans('password') ?>" >
          </div>
          <div class="row">
          	<div class="col-12">
              <!-- <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> <?= trans('remember_me') ?>
                </label>
              </div> -->

            </div>
            <br>
          	<div class="col-12">
          		<br>
             

				<div class="container-login100-form-btn">
				<input type="submit" name="submit" id="submit" class="login100-form-btn" value="<?= trans('signin') ?>">
				</div>
            </div>
            
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
        <?php echo form_close(); ?>


<div class="row">
	<div class="col-md-12">
		<div class="w-full text-center p-t-27 p-b-239">
						<!-- <span class="txt1">
							 <a href="<?= base_url('admin/auth/forgot_password'); ?>"><?= trans('i_forgot_my_password') ?></a>
						</span> -->
						<br>
					<!-- 	<a href="forget.html" class="txt2">
							 <a href="<?= base_url('admin/auth/register'); ?>" class="text-center"><?= trans('register_new_membership') ?></a>
						</a> -->
					</div>
			</div>
		</div>
        <p class="mb-1"></p>
        <p class="mb-0"></p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</div>
</div>
</div>
</div>
</section>




