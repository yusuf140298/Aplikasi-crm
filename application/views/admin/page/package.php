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
                                        <label for="packagename">Package Name</label>
                                        <input type="text" name="packagename" id="packagename" class="form-control" placeholder="Masukan Nama Paket">
                                    </div>  
                                    <div class="form-group">
                                        <label for="no_tlp">Price</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="" value=""/>
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CategoryName">Select Item</label>
                                        <select name="items" id="items" class="form-control">
                                            <?php 
                                            $no=1;
                                            foreach($product->result() as $key => $prd) {
                                                ?>
                                                <option value="<?=$prd->id_product?>"><?=$prd->nama_product?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="CategoryName">Select Material</label>
                                        <select name="material" id="material" class="form-control">
                                        <?php 
                                            $no=1;
                                            foreach($sablon->result() as $key => $sb) {
                                                ?>
                                                <option value="<?=$sb->id_sablon?>"><?=$sb->ukuran_sablon?></option>
                                            <?php
                                            }
                                            ?>
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
                                    <button class="btn btn-flat btn-primary w-100 float-right">Save Package</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Package Name</th>
                            <th>Price</th>
                            <th>Items</th>
                            <th>Material</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            foreach($tampil->result() as $key => $data){
                            ?>
                        <tr>
                            <td width="5%"><?=$no++?></td>
                            <td><?=$data->nama_package?></td>
                            <td><?=$data->price?></td>
                            <td><?=$data->nama_product?></td>
                            <td><?=$data->ukuran_sablon?></td>
                            <td><?=$data->description?></td>
                            <td align="center">
                                <button class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                                <button class="btn btn-sm btn-default"><i class="fa fa-pen text-warning"></i></button>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
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