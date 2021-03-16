  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class='text-center'>TimeSlot</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add TimeSlot</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
          <?php $this->load->view('admin/includes/_messages.php');?>
      </div>
          </div>
        </div>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-2">
        </div>
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add TimeSlot</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action='<?php echo base_url('admin/TimeSlot/add_timeSlot'); ?>' method='post'  > 
              <input type="hidden" id='token' name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

            

              <div class="form-group">
                
                <div class="card-body">

                    <label for="exampleInputEmail1">University</label>
                    <select class="form-control" name='univ_id' id = 'univ_id'> 
                    <option>Select University </option>
                    <?php if(!empty($university)):
                      foreach ($university as $univ):
                      ?>
                    <option class="form-control" value="<?=$univ->id;?>" ><?=$univ->university;?></option>
                    <?php endforeach;
                    endif;
                    ?>
                    </select>

                  </div>

              </div>

              <div class="form-group">
                 <div class="card-body">

                    <label for="exampleInputEmail1">Select College</label>
                    <select class="form-control" name='col_id' id='col_id'></select>

                  </div>

              </div>

              <div class="form-group">
                
                <div class="card-body">

                    <label for="exampleInputEmail1">Select Apply Type</label>
                    <select class="form-control" name='apply_type'> 
                    
                    <option class="form-control" value="1" ><?='Course Applied';?></option>
                    <option class="form-control" value="2" ><?='Webinar Applied';?></option>
                    
                    </select>

                  </div>

              </div>
        
              <div class="form-group">
                   <div class="card-body">

                    <label for="exampleInputEmail1">Select Course</label>
                    <select class="form-control" name='course_webinar_id'> 
                    <?php if(!empty($course)):
                      foreach ($course as $cour):
                      ?>
                    <option class="form-control" value="<?=$univ->id;?>" ><?=$cour->course;?></option>
                    <?php endforeach;
                    endif;
                    ?>
                    </select>

                  </div>

                </div>


                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">TimeSlot</label>
                    <input type="text" class="form-control" name='time_slot' placeholder="Enter TimeSlot Name">
                  </div>
        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
    
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
  $("#forms").addClass('active');
  $("#gen").addClass('active');
</script>  



<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>


var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';

var csfr_token_value = '<?php echo $this->security->get_csrf_hash(); ?>';

$(document).ready(function(){
       
    
      $("#univ_id").change(function(){
            
       var data =  { univ_id : this.value, }

          data[csfr_token_name] = csfr_token_value;

            //console.log(data);

            if ($("#univ_id").val().length == 0){

             alert('hello');
             // $("#univ_id").val("1");


            }

               $.ajax({
                  type: 'POST',
                  url: '<?php echo site_url('admin/TimeSlot/view_College'); ?>',
                  data: data,
                  success: function(obj){

                    console.log(obj);
                    $('#col_id').html(obj);
                        
                    // $.each(obj.result, function(i, item) {
                    //     alert(obj.result[i].col_name);
                    //     console.log(obj.result[i].col_name);
                    // })

                        }
               });
              
      });
      
   });


</script>



