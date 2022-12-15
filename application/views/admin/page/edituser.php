<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('ManajementUser')?>">Account Management</a></li>
              <li class="breadcrumb-item active">Edit Account</li>
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
                    <a class="btn btn-flat btn-primary">
                        <i class="fas fa-reply"></i>
                         | Back
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Full Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="example01@mail.com"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Masukan Password"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_tlp">No.tlp</label>
                                <input type="number" class="form-control" id="no_tlp" name="no_tlp" placeholder="+62"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rule">Select Level</label>
                                <select class="form-control" id="rule" name="rule">
                                    <option>-- Select Level --</option>
                                    <option>Administrator</option>
                                    <option>Pemilik Usaha</option>
                                    <option>Karyawan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-flat btn-primary float-right"><i class="fas fa-paper-plane"></i> | Save Change</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>