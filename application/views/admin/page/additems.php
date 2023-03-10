<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product Items</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('Account')?>">Product</a></li>
              <li class="breadcrumb-item active">Add Product Items</li>
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
                    <a href="<?=site_url('Product')?>" class="btn btn-sm btn-primary">
                        <i class="fas fa-reply"></i>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?=form_open_multipart('Product/add_items')?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="items">Items Name</label>
                                    <input type="text" class="form-control <?=form_error('items')== !null ? "is-invalid": null?>" id="items" name="items" placeholder="Masukan Nama items" value="<?=set_value('items')?>"/>
                                    <span class="error invalid-feedback"><?=form_error('items')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input type="number" class="form-control <?=form_error('qty')== !null ? "is-invalid": null?>" id="qty" name="qty" placeholder="Masukan qty" value="<?=set_value('qty')?>"/>
                                    <span class="error invalid-feedback"><?=form_error('qty')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control <?=form_error('color')== !null ? "is-invalid": null?>" id="color" name="color" placeholder="Masukan Nama color" value="<?=set_value('color')?>"/>
                                    <span class="error invalid-feedback"><?=form_error('color')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <input type="text" class="form-control <?=form_error('size')== !null ? "is-invalid": null?>" id="size" name="size" placeholder="Masukan size" value="<?=set_value('size')?>"/>
                                    <span class="error invalid-feedback"><?=form_error('size')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_tlp">Price</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control <?=form_error('price')== !null ? "is-invalid": null?>" id="price" name="price" placeholder="" value="<?=set_value('price')?>"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    <span class="error invalid-feedback"><?=form_error('price')?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rule">Select Category</label>
                                    <select class="form-control <?=form_error('category')== !null ? "is-invalid": null?>" id="category" name="category" value="<?=set_value('category')?>">
                                        <option value="">-- Select Category --</option>
                                        <?php foreach ($row->result() as $key => $data){?>
                                        <option value="<?=$data->id_category?>"><?=$data->nama_category?></option>    
                                        <?php } ?>
                                    </select>
                                    <span class="error invalid-feedback"><?=form_error('category')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image_product">Masukan Image</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_product" name="image_product">
                                        <label class="custom-file-label" for="image_product">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <!-- <span class="error invalid-feedback"><?=form_error('image_product')?></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="20" rows="10" class="form-control <?=form_error('description')== !null ? "is-invalid": null?>"></textarea>
                                    <span class="error invalid-feedback"><?=form_error('description')?></span>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i>&ensp;|&ensp;Save</button>
                            </div>
                        </div>
                    <?=form_close()?>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>