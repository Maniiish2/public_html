  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class='text-center'>College</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add College</li>
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
          <?php $this->load->view('admin/includes/_messages.php') ?>

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
                <h3 class="card-title">Add College</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action='<?php echo base_url('admin/College/add_college'); ?>' method='post'  > 
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
        
              <div class="form-group">
                   <div class="card-body">

                    <label for="exampleInputEmail1">Select University</label>
                    <select class="form-control" name='univ_id'> 
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

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Add College</label>
                    <input type="text" class="form-control" name='col_name' placeholder="Enter College Name">
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