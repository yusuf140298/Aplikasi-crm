<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('Category')?>">Package</a></li>
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
                    <div class="card-body">
                        <div class="md-12 bg-indigo text-center p-2 mb-3">
                            <strong>Add New Package</strong>
                        </div>
                        <form action="" method="">
                            <div class="row">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <label for="CategoryName">Package Name</label>
                                        <input type="text" name="categoryName" id="categoryName" class="form-control">
                                    </div>  
                                    <div class="form-group">
                                        <label for="CategoryName">Price</label>
                                        <input type="text" name="categoryName" id="categoryName" class="form-control">
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CategoryName">Select Item</label>
                                        <select name="material" id="material" class="form-control">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="CategoryName">Select Material</label>
                                        <select name="material" id="material" class="form-control">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="CategoryName">Description</label>
                                        <input type="text" name="description" id="description" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-flat btn-primary w-100 float-right">Save</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td width="5%">1</td>
                            <td>Baju 1</td>
                            <td>Items</td>
                            <td>Rp.14,000.00</td>
                            <td>Size M Bahan Cotton Combed 30s</td>
                            <td>35</td>
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

    </section>
    <!-- /.content -->
  </div>