<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Product Items</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('Product')?>">Product</a></li>
              <li class="breadcrumb-item active">Update Product Items</li>
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
                    <?=form_open_multipart('Product/update_product')?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="items">Items Name</label>
                                    <input type="hidden" name="id_product" value="<?=$row->id_product?>">
                                    <input type="text" class="form-control <?=form_error('items')== !null ? "is-invalid": null?>" id="items" name="items" placeholder="Masukan Nama items" value="<?=$this->input->post('items') ?? $row->nama_product?>"/>
                                    <span class="error invalid-feedback"><?=form_error('items')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input type="number" class="form-control <?=form_error('qty')== !null ? "is-invalid": null?>" id="qty" name="qty" placeholder="Masukan qty" value="<?=$this->input->post('qty') ?? $row->qty?>"/>
                                    <span class="error invalid-feedback"><?=form_error('qty')?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control <?=form_error('color')== !null ? "is-invalid": null?>" id="color" name="color" placeholder="Masukan Nama color" value="<?=$this->input->post('color') ?? $row->color?>"/>
                                    <span class="error invalid-feedback"><?=form_error('color')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <input type="text" class="form-control <?=form_error('size')== !null ? "is-invalid": null?>" id="size" name="size" placeholder="Masukan size" value="<?=$this->input->post('size') ?? $row->size?>"/>
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
                                    <input type="text" class="form-control <?=form_error('price')== !null ? "is-invalid": null?>" id="price" name="price" placeholder="" value="<?=$this->input->post('price') ?? $row->price?>"/>
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
                                    <select class="form-control <?=form_error('category')== !null ? "is-invalid": null?>" id="category" name="category">
                                        <option value="">-- Select Category --</option>
                                        <?php
                                        $category = $this->input->post('category') ? $this->input->post('category') : $row->product_category; 
                                        foreach ($cat->result() as $key => $data){?>
                                        <option value="<?=$data->id_category?>" <?=$category == $data->id_category ? "selected" : null ?>><?=$data->nama_category?></option>    
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
                                    <?php
                                    if($row->image != null){?>
                                     <div class="mb-3 bg-indigo p-3 text-center">
                                        <img src="<?=base_url()?>uploads/img_product/<?=$row->image?>" style="width:20%">
                                     </div>   
                                    <?php
                                    }
                                    ?>
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
                                    <textarea name="description" id="description" cols="20" rows="10" class="form-control <?=form_error('description')== !null ? "is-invalid": null?>"><?=$this->input->post('description') ?? $row->description?></textarea>
                                    <span class="error invalid-feedback"><?=form_error('description')?></span>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i>&ensp;|&ensp;Save Change</button>
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