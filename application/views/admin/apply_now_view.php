<link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables/dataTables.bootstrap4.css">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Apply Now</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Apply Now Forms</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Apply Now Forms</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S no.</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                   <th>Course</th>
                   <th>University</th>
                   <th>Current Standard</th>
                   <th>College Name</th>
                   <!-- <th>Gender</th>
                   <th>DOB</th>
                   <th>Payment Mode</th>
                   <th>Scholorship</th> -->
                </tr>
                </thead>
                <tbody>
                  <?php $i=1;
                   foreach ($data as $row)
                    {
                   ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row->name;?></td>
                  <td><?php echo $row->email;?></td>
                  <td><?php echo $row->phone;?></td>
                  <td><?php echo $row->course;?></td>
                  <td><?php echo $row->university;?></td>
                  <td><?php echo $row->standard;?></td>
                  <td><?php echo $row->college;?></td>
                  <!-- <td><?php //echo $row->sex;?></td>
                  <td><?php //echo $row->dob;?></td>
                  <td><?php //echo $row->payment;?></td>
                  <td><?php //echo $row->scholarship;?></td> -->
                </tr>

                  <?php  $i++;}  ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>S no.</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                   <th>Course</th>
                   <th>University</th>
                   <th>Current Standard</th>
                   <th>College Name</th>
                   <!-- <th>Gender</th>
                   <th>Date of Birth</th>
                   <th>Payment Mode</th>
                   <th>Scholorship</th>
                   <th>Message</th> -->
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- DataTables -->
<script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
