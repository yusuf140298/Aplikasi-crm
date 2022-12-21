<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('Category')?>">Category</a></li>
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
                            <strong>Add New Category</strong>
                        </div>
                        <form action="<?=site_url('Category/index')?>" method="post">
                            <div class="row">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <label for="CategoryName">Category Name</label>
                                        <input type="text" name="category" id="category" class="form-control <?=form_error('category')== !null ? "is-invalid": null?>">
                                        <span class="error invalid-feedback"><?=form_error('category')?></span>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CategoryName">Description</label>
                                        <input type="text" name="description" id="description" class="form-control <?=form_error('description')== !null ? "is-invalid": null?>">
                                        <span class="error invalid-feedback"><?=form_error('description')?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit    " class="btn btn-flat btn-primary w-100 float-right">Save</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode</th>
                            <th>Name Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no=1;
                        foreach($row->result() as $key => $data){
                            ?>
                        <tr>
                            <td width="5%"><?=$no++?></td>
                            <td><?=$data->id_category?></td>
                            <td><?=$data->nama_category?></td>
                            <td><?=$data->description?></td>
                            <td align="center">
                                <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#deleteCategory"><i class="fa fa-trash text-danger"></i></button>
                                <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#editCategory<?=$data->id_category?>"><i class="fa fa-pen text-warning"></i></button>
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

  <!-- modal delete -->
  <div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Delete Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          sure you want to delete?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="<?=site_url('Category/delete_category/'.$data->id_category)?>" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!-- modal edit -->
  <?php 
  $no = 0;
  foreach ($row->result() as $data) : $no++; ?>
  <div class="modal fade" id="editCategory<?=$data->id_category?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="<?=site_url('edit_category')?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="editcategory">Category Name</label>
            <input type="hidden" name="id_category" id="id_category" value="<?=$data->id_category?>">
            <input type="text" class="form-control" name="editcategory" id="editcategory" value="<?=$data->nama_category?>">
          </div>
          <div class="form-group">
            <label for="editdescription">Description</label>
            <input type="text" class="form-control" name="editdescription" id="editdescription" value="<?=$data->description?>">
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