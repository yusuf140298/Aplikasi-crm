<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product Sablon</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('Account')?>">Product</a></li>
              <li class="breadcrumb-item active">Add Product Sablon</li>
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
                    <?=form_open_multipart('Product/add_sablon')?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="items">Nama Ukuran</label>
                                    <input type="text" class="form-control <?=form_error('ukuran')== !null ? "is-invalid": null?>" id="ukuran" name="ukuran" placeholder="Masukan Nama ukuran" value="<?=set_value('ukuran')?>"/>
                                    <span class="error invalid-feedback"><?=form_error('ukuran')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rule">Spesifikasi</label>
                                    <input type="text" class="form-control <?=form_error('spesifikasi')== !null ? "is-invalid": null?>" id="spesifikasi" name="spesifikasi" placeholder=" panjang x lebar cm" value="<?=set_value('spesifikasi')?>"/>    
                                    <span class="error invalid-feedback"><?=form_error('spesifikasi')?></span>
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
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image_sablon">Masukan Image</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_sablon" name="image_sablon">
                                        <label class="custom-file-label" for="image_sablon">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <!-- <span class="error invalid-feedback"><?=form_error('image_sablon')?></span> -->
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