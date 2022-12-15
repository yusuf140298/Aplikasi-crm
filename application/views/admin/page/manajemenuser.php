<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('ManajementUser')?>">Account Management</a></li>
              <!-- <li class="breadcrumb-item active">Blank Page</li> -->
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
                <div class="card-header">
                    <a href="<?=site_url('Account/add_admin')?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>No. Wa/Tlp</th>
                        <th>Level</th>
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
                        <td><?=$data->password?></td>
                        <td><?=$data->no_tlp?></td>
                        <td><?php
                            if($data->rule == 1){
                              echo "Administrator";
                            }else if($data->rule == 2){
                              echo "Pemilik Toko";
                            }else{
                              echo "Karyawan";
                            }
                        ?></td>
                        <td align="center">
                            <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#deleteAccountAdmin"><i class="fa fa-trash text-danger"></i></button>
                            <a  href="<?=site_url('Account/edit_admin/'.$data->id_user)?>" class="btn btn-sm btn-default"><i class="fa fa-pen text-warning"></i></a>
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
  <!-- modal delete -->
  <div class="modal fade" id="deleteAccountAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Delete Account Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          sure you want to delete?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="<?=site_url('Account/delete_admin/'.$data->id_user)?>" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>