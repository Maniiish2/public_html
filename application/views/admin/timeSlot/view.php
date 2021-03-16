<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <!-- For Messages -->
    <?php $this->load->view('admin/includes/_messages.php') ?>
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; <?= 'Course List' ?></h3>
        </div>
        <div class="d-inline-block float-right">
           <a href="<?= base_url('admin/Course/add_courses'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> <?='Add Course'?></a>
            </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body table-responsive">
        <table id="na_datatable" class="table table-bordered table-striped" width="100%">
          <thead>
            <tr>
              <th>#<?= trans('id') ?></th>
              <th><?='course';?></th>
              <th><?='university';?></th>
              <th><?='College';?></th>
              <th><?='TIme-Slot';?></th>
              <th><?='Apply for';?></th>
              <th><?='Actions';?></th>

            </tr>
          </thead>
          <?php $i=1; foreach($result as $row){?>
          <tbody>
          <tr>
          
          <td><?=$i++?></td>
          <td><?=$row->course?></td>
          <td><?=$row->university?></td>
          <td><?=$row->col_name?></td>
          <td><?=$row->time_slot?></td>
          <td><?php if($row->apply_type==1){echo 'Course Apply'; }else{ echo 'Webinar Apply'; } ?></td>
          <td><a href="<?= base_url('admin/TimeSlot/delete/'.$row->time_id); ?>" onclick="return confirm('Are you sure to Delete?')" class="btn btn-danger">Delete</a></td>
          </tr>
          </tbody>
          <?php }?>
        </table>
      </div>
    </div>
  </section>  
</div>


<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
  //---------------------------------------------------
  var table = $('#na_datatable').DataTable( {
    "processing": true,
    "serverSide": false,
    "ajax": "<?=base_url('admin/Course/datatable_json')?>",
    "order": [[8,'desc']],
    "columnDefs": [
    { "targets": 0, "name": "id", 'searchable':true, 'orderable':true},
    { "targets": 1, "name": "course", 'searchable':true, 'orderable':true},
    
    ]
  });


</script>

