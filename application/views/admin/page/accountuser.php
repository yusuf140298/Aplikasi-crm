<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('ManajementUser')?>">Account Management</a></li>
              <li class="breadcrumb-item active">Account Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <!-- <div class="card-header">
                    <!-- <a href="<?=site_url('Account/add_admin')?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a> -->
                <!-- </div> -->
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>  
                        <th>No. Wa/Tlp</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no=1;
                      foreach($row->result() as $key => $data){
                          ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->nama?></td>
                        <td><?=$data->username?></td>
                        <td><?=$data->email?></td>
                        <td><?=$data->no_tlp?></td>
                        <td><?=$data->rule == 4 ? "Customer": "Tidak Terdaftar"?></td>
                        <td><?=$data->status == 1 ? '<p class="text-success">Active</p>' : '<p class="text-danger">Not Active</p>' ?></td>
                        <td align="center">
                            <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#editStatus<?=$data->id_user?>"><i class="fa fa-pen text-warning"></i></button>
                            <!-- <a  href="<?=site_url('Account/edit_admin/'.$data->id_user)?>" class="btn btn-sm btn-default"><i class="fa fa-pen text-warning"></i></a> -->
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- modal update -->
  <?php 
  $no = 0;
  foreach ($row->result() as $data) : $no++; ?>
  <div class="modal fade" id="editStatus<?=$data->id_user?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Status Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?=site_url('Account/editstatus')?>" method="post">
            <div class="modal-body">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" id="" value="<?=$data->nama?>" readonly>
                <input type="hidden" name="id_user" id="id_user" value="<?=$data->id_user?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                <?php $status = $this->input->post('status') ? $this->input->post('status') : $data->status ?>
                <option value="1" <?=$status == 1 ? "selected" : null ?>>Active</option>
                <option value="2" <?=$status == 2 ? "selected" : null ?>>Not Active</option>
                </select>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Change</button>
            </div>
        </form>
        </div>
    </div>
  </div>
  <?php endforeach ;?>