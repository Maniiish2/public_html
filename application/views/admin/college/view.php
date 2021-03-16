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
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; <?= 'College List' ?></h3>
        </div>
        <div class="d-inline-block float-right">
           <a href="<?= base_url('admin/College/add_college'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> <?='Add College'?></a>
            </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body table-responsive">
        <table id="na_datatable" class="table table-bordered table-striped" width="100%">
          <thead>
            <tr>
              <th>#<?= trans('id') ?></th>
              <th><?='University';?></th>
              <th><?='college';?></th>
              <th><?='Actions';?></th>

            </tr>
          </thead>
          <?php $i=1; foreach($result as $row){?>
          <tbody>
          <tr>
          
          <td><?=$i++?></td>
          <td><?=$row->university?></td>
          <td><?=$row->col_name?></td>
          <td><a href="<?= base_url('admin/College/delete/'.$row->colz_id); ?>" onclick="return confirm('Are you sure to Delete?')" class="btn btn-danger">Delete</a></td>
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
    "order": [[4,'desc']],
    "columnDefs": [
    { "targets": 0, "name": "id", 'searchable':true, 'orderable':true},
    { "targets": 1, "name": "course", 'searchable':true, 'orderable':true},
    
    ]
  });


</script>

