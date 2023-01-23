<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Account Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('Account')?>">Account Management</a></li>
              <li class="breadcrumb-item active">Update Account Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                <div class="card-header">
                    <a href="<?=site_url('Account')?>" class="btn btn-sm btn-primary">
                        <i class="fas fa-reply"></i>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Full Name</label>
                                    <input type="hidden" name="id_user" value="<?=$row->id_user?>">
                                    <input type="text" class="form-control <?=form_error('nama')== !null ? "is-invalid": null?>" id="nama" name="nama" placeholder="Masukan Nama Lengkap" value="<?=$this->input->post('nama') ?? $row->nama?>"/>
                                    <span class="error invalid-feedback"><?=form_error('nama')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control <?=form_error('username')== !null ? "is-invalid": null?>" id="username" name="username" placeholder="Masukan Username" value="<?=$this->input->post('username') ?? $row->username?>""/>
                                    <span class="error invalid-feedback"><?=form_error('username')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control <?=form_error('email')== !null ? "is-invalid": null?>" id="email" name="email" placeholder="example01@mail.com" value="<?=$this->input->post('email') ?? $row->email?>"/>
                                    <span class="error invalid-feedback"><?=form_error('email')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Password">Password</label><small class="text-danger">&ensp; ( leave blank if not changed )</small>
                                    <input type="password" class="form-control <?=form_error('password')== !null ? "is-invalid": null?>" id="password" name="password" placeholder="Masukan Password" value="<?=$this->input->post('password')?>"/>
                                    <span class="error invalid-feedback"><?=form_error('password')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_tlp">No.tlp</label>
                                    <input type="number" class="form-control <?=form_error('no_tlp')==!null ? "is-invalid": null?>" id="no_tlp" name="no_tlp" placeholder="+62" value="<?=$this->input->post('no_tlp') ?? $row->no_tlp?>"/>
                                    <span class="error invalid-feedback"><?=form_error('no_tlp')?></span>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="rule">Select Level</label>
                                    <select class="form-control <?=form_error('rule')== !null ? "is-invalid": null?>" id="rule" name="rule">
                                        <?php $level = $this->input->post('rule') ? $this->input->post('rule') : $row->rule ?>
                                        <option value="1" <?=$level == 1 ? "selected" : null ?>>Administrator</option>
                                        <option value="2" <?=$level == 2 ? "selected" : null ?>>Pemilik Usaha</option>
                                        <option value="3" <?=$level == 3 ? "selected" : null ?>>Karyawan</option>
                                    </select>
                                    <span class="error invalid-feedback"><?=form_error('rule')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rule">Select Status</label>
                                    <select class="form-control <?=form_error('status')== !null ? "is-invalid": null?>" id="status" name="status">
                                        <?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
                                        <option value="1" <?=$status == 1 ? "selected" : null ?>>Active</option>
                                        <option value="2" <?=$status == 2 ? "selected" : null ?>>Not Active</option>
                                    </select>
                                    <span class="error invalid-feedback"><?=form_error('status')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i>&ensp;|&ensp;Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>