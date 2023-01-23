<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="<?=site_url('landing')?>">Home</a>
                <span class="breadcrumb-item active">Transaksi</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- form register -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Transaksi</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-4 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form action="" name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="name">No. Tlp</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan No.tlp">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan E-mail">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form action="" name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="d-flex mb-3 mt-5">
                            <strong class="mr-3">Sizes:</strong>
                            <form>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-1" name="size">
                                    <label class="custom-control-label" for="size-1">XS</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-2" name="size">
                                    <label class="custom-control-label" for="size-2">S</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-3" name="size">
                                    <label class="custom-control-label" for="size-3">M</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-4" name="size">
                                    <label class="custom-control-label" for="size-4">L</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-5" name="size">
                                    <label class="custom-control-label" for="size-5">XL</label>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex mb-4">
                            <strong class="mr-3">Colors:</strong>
                            <form>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-1" name="color">
                                    <label class="custom-control-label" for="color-1">Black</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-2" name="color">
                                    <label class="custom-control-label" for="color-2">White</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-3" name="color">
                                    <label class="custom-control-label" for="color-3">Red</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-4" name="color">
                                    <label class="custom-control-label" for="color-4">Blue</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-5" name="color">
                                    <label class="custom-control-label" for="color-5">Green</label>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex justify-content-center bg-secondary mb-5">
                            <img src="<?=base_url()?>assets/img_product/My project-1 (1).png" alt="" srcset="" style="width:200px; height:200px">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group quantity mr-3 mb-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Pilih Ukuran Sablon</label>
                                    <select name="" class="form-control" id="">
                                        <option value="a">pilih</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-center bg-secondary mb-5">
                                    <img src="<?=base_url()?>assets/img_product/My project-1 (1).png" alt="" srcset="" style="width:200px; height:200px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Upload Desain</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pesan Deskiripsi</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Lakukan Pembayaran</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                
            </div>
        </div>

    </div>
<!-- /form register -->