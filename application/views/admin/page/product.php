<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('Product')?>">Product</a></li>
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
            <div class="col-md-12">
                <div class="card card-solid">
                    <div class="card-body">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Items</a>
                                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Material</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                        <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>admin</td>
                            <td>admin@example.com</td>
                            <td>qweqweqwe13e13j41iu2y</td>
                            <td>Administrator</td>
                            <td align="center">
                                <button class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                                <button class="btn btn-sm btn-default"><i class="fa fa-pen text-warning"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                        <table id="example3" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>admin</td>
                            <td>admin@example.com</td>
                            <td>qweqweqwe13e13j41iu2y</td>
                            <td>Administrator</td>
                            <td align="center">
                                <button class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                                <button class="btn btn-sm btn-default"><i class="fa fa-pen text-warning"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        </table>                          
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>