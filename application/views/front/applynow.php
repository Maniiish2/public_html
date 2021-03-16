<style>
  /*============apply-now====================*/
  .Apply_noy {
    width: 60%;
    background: #fff;
    overflow: hidden;
    margin: auto;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    /* display: flex; */
    flex-wrap: wrap;
    align-items: stretch;
    flex-direction: row-reverse;
  }
  .aply_form{
    width: 88%;
    margin: auto;
  }
  select.input100 {
    height: 55px;
  }
  select.input100:focus{
    outline: none;
  }
  .apply_logo img {
    width: 12%;
  }
  .apply_logo {
    font-family: Poppins-Regular;
    font-size: 31px;
    font-weight: bold;
    color: #555555;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
    padding: 23px 0;
    width: 100%;
    display: block;
  }
  .w-100 {
    width: 100%;
    height: 70px;
    padding: 7px 5px;
    border: 1px solid #c1c1c1;
  }
  .w-100:focus {
    border: 1px solid #c1c1c1!important
  }
  .save_btn {
    margin-bottom: 42px;
    padding: 7px 0;
    text-align: center;
  }
  a.c_n {
    padding: 8px 19px;
    background-color: #f4524d;
    border: 1px sloid #eee;
    border: 1px solid #f4524d;
    color: #ffffff;
  }
  a.c_l {
    padding: 8px 19px;
    background-color: #70acb1;
    border: 1px sloid #eee;
    border: 1px solid #70acb1;
    color: #ffffff;
  }
  .mass_age {
    width: 50%;
    margin: auto;
  }
  .f_check{
            margin-right: 10px;
    background-color: #70acb1;
    padding: 0 13px;
        }

        .f_uncheck{
            margin-right: 10px;
    border:1px solid #70acb1;
    padding: 0 13px;
        }

  /*============apply-now====================*/
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

<div class="limiter">
  <div class="container-login100">
    <div class=" Apply_noy">
      <!-- <form class=" aply_form"> -->
      <span class="apply_logo">
        <img src="<?=base_url()?>public/assets/img/logo-dark.png" alt="logo">
      </span>

      <br>
      <div class="app-web text-center mb-5" style="width: 100%;">
		
      <label class="form-check-label f_check " for="w1">
       <input type="radio" class="form-check-input" id="w1" name="optradio" checked>    <strong style="margin-left: 17px;color: #fff; font-size: 16px;">Course</strong>  
      </label>
 
                      
          <label class="form-check-label f_uncheck" for="w2" style="margin-right: 10px">
          <input type="radio" class="form-check-input" id="w2" name="optradio">   <strong class="w_text" style="margin-left: 17px;font-size: 16px;">Webinar</strong> 
      </label>
                      
					    
					</div>

      <span class="apply_logo">
        <div class="mass_age">
          <?php $this->load->view('admin/includes/_messages.php') ?>
        </div>
      </span>

      
  



      <div class="form_inputfff">
    
<!-- START APPLICATION TYPE -->

<div class="col-md-6">
        <div class="web1">
          <label for="staticEmail" class=" col-form-label">Course Applied For 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
          <select  class="input100" name="courses">
         
         <?php if(!empty($view_course)):
              foreach($view_course as $v_course):?>
                <option value='<?=$v_course->id;?>'>
                  <?=$v_course->course;?>
                </option>
         <?php endforeach; endif;?>
       </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="web2" style="display: none;">
          <label for="staticEmail" class=" col-form-label">Webinar Applied For 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <select  class="input100" name="Webinar">
            <?php if(!empty($view_Webinar)):
              foreach($view_Webinar as $v_Webinar):?>
                <option value='<?=$v_Webinar->id;?>'>
                  <?=$v_Webinar->webinar;?>
                </option>
               <?php endforeach; endif;?>
          </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
      </div>


<!-- END APPLICATION TYPE -->




        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">University
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <select  class="input100" name="universitys" requireddd>
        
              <?php if(!empty($view_uni)):
				foreach($view_uni as $v_uni):?>
                 <option value='<?=$v_course->id;?>'>
                  <?=$v_uni->university;?>
                </option>
              <?php endforeach; endif;?>
            </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Current Standard 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <select  class="input100" name="standard" requireddd>
              
              <option value="Postgraduate">Post-Graduate
              </option>
              <option value="Undergraduate">Under-Graduate
              </option>
              <option value="Highersecondary">Higher-Secondary
              </option>
              <option value="Secondary">Secondary
              </option>
              <option value="Primary">Primary
              </option>
            </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Name of College 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
           <select  class="input100" name="college">
            <?php if(!empty($view_college)):
              foreach($view_college as $v_college):?>
                <option value='<?=$v_college->id;?>'>
                  <?=$v_college->col_name;?>
                </option>
               <?php endforeach; endif;?>
          </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
		<div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Name of Student
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100" type="text" name="name" placeholder="Name of Student" requireddd>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Email 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100" type="email" name="email" placeholder="Enter Email " requireddd>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Phone 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100" type="text" name="phone" placeholder="Enter Phone " requireddd>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Gender
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <select  class="input100" name="sex" requireddd>
              <option value="male">Male 
              </option>
              <option value="female">Female
              </option>
              <option value="Transgender">Transgender
              </option>
            </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Date of Birth 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100" type="date" name="dob" placeholder="" requireddd>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Preferred Payment Mode 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <select  class="input100" name="payment" requireddd>
              <option> --- Select Payment Method ---
              </option>
              <option value="cash">Cash 
              </option>
              <option value="card">Card
              </option>
              <option value="net_banking">Net Banking 
              </option>
              <option value="paytm">PayTM 
              </option>
              <option value="upi">UPI 
              </option>
            </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="staticEmail" class=" col-form-label">Obtain for Scholarship 
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <select  class="input100" name="scholarship" requireddd>
              <option value="yes ">Yes 
              </option>
              <option value="No">No
              </option>
            </select>
            <span class="focus-input100">
            </span>
          </div>
        </div>
        <div class="col-md-12">
          <label for="staticEmail" class=" col-form-label">Message
          </label>
          <div class=" rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <textarea class="w-100" placeholder="Enter Massage" name="message" requireddd>
            </textarea>
          </div>
        </div>

        <div class="col-md-12 text-center">
           <div class="g-recaptcha col-form-label" data-sitekey="6LeHo3kaAAAAAE5FUP6CnFUKU7WxO3urrDK0EByv"></div>
        </div>

        <div class="col-md-12">
         <div class="save_btn">
            <a href="<?=base_url();?>" class="c_n">Cancel
            </a>
            <input type="submit" class="btnContact" value="Submit" />
          </div>
        </div>
      </div>
      <?php echo form_close() ?>
      <!-- </form> -->
    </div>
  </div>
</div>


<script>
  $(function() {
    var timeout = 3000;
    $(".mass_age").delay(timeout).fadeOut(300);
  }
   );

   $("#w1").click(function(){
           $(".web1").show();
           $(".web2").hide();
       })   
              $("#w2").click(function(){
           $(".web1").hide();
           $(".web2").show();
       })
       
</script>
