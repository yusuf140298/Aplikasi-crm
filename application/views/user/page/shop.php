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
        <?=form_open_multipart('Transaksi/prosess')?>
        <div class="row px-xl-5">
            <div class="col-lg-8 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <!-- <form action="" name="sentMessage" id="contactForm" novalidate="novalidate"> -->
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" name="product" id="product" class="form-control" placeholder="Masukan Nama Lengkap" value="<?=$row->nama_category?>" readonly>
                            <input type="hidden" value="<?=$row->id_category?>" name="idCategory" id=idCategory>
                        </div>
                        <div class="d-flex mb-3 mt-5">
                            <strong class="mr-3">Sizes:</strong>
                            <!-- <form> -->
                                <?php
                                $no=1;
                                $id=1;
                                foreach ($siz->result() as $key => $size){
                                ?>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-<?=$no++?>" name="size" value="<?=$size->size?>">
                                    <label class="custom-control-label" for="size-<?=$id++?>"><?=$size->size?></label>
                                </div>
                                <?php }?>
                                <!-- <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-2" name="size">
                                    <label class="custom-control-label" for="size-2">L</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-3" name="size">
                                    <label class="custom-control-label" for="size-3">XL</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-4" name="size">
                                    <label class="custom-control-label" for="size-4">XXL</label>
                                </div> -->
                            <!-- </form> -->
                        </div>
                        <div class="d-flex mb-4">
                            <strong class="mr-3">Colors:</strong>
                            <!-- <form> -->
                            <?php
                                $no=1;
                                $id=1;
                                foreach ($col->result() as $key => $color){
                                ?>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-<?=$id++?>" name="color" value="<?=$color->color?>">
                                    <label class="custom-control-label" for="color-<?=$no++?>"><?=strtoupper($color->color)?></label>
                                </div>
                                <?php }?>
                                <!-- <div class="custom-control custom-radio custom-control-inline">
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
                                </div> -->
                            <!-- </form> -->
                        </div>
                        <div class="d-flex justify-content-center bg-secondary mb-5">
                            <img src="<?=base_url()?>assets/img_product/My project-1 (1).png" alt="" srcset="" style="width:200px; height:200px">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group quantity mr-3 mb-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-secondary border-0 text-center" value="1" id="qty" name="qty">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Pilih Ukuran Sablon</label>
                                    <select name="sablon" class="form-control" id="sablon">
                                        <option value="">pilih</option>
                                        <?php
                                        $no=0;
                                        foreach($sablon->result() as $key => $sablon){
                                        ?>
                                        <option value="<?=$sablon->id_sablon?>"><?=$sablon->spesification?> - (<?=strtoupper($sablon->ukuran_sablon)?>)</option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-center bg-secondary mb-5">
                                    <img name="image_sablon" id="image_sablon" src="" alt="" srcset="" style="width:200px; height:200px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Upload Desain</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pesan Deskiripsi</label>
                            <textarea class="form-control" name="pd" id="pd" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <!-- <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Lakukan Pembayaran</button> -->
                        </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="contact-form bg-light p-30 mb-3">
                    <div id="success"></div>
                    <!-- <form action="" name="sentMessage" id="contactForm" novalidate="novalidate"> -->
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama Lengkap" value="<?=$this->fungsi->customer_login()->nama?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">No. Tlp</label>
                            <input type="text" name="name" id="tlp" class="form-control" placeholder="Masukan No.tlp" value="<?=$this->fungsi->customer_login()->no_tlp?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="name" id="email" class="form-control" placeholder="Masukan E-mail" value="<?=$this->fungsi->customer_login()->email?>" readonly>
                        </div>
                        <!-- hidden value -->
                        <input type="hidden" id="idProduct" value="">
                        <input type="hidden" id="sizeValue" name="sizeValue" value="">
                    <!-- </form> -->
                </div>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Product</h6>
                            <h6 id="hargaProduct">Rp. 0</h6>
                            <input type="hidden" name="hargaProduct" id="hargaP" value="0">
                            <!-- kode transaksi -->
                            <input type="hidden" name="kodetransaksi" id="kodetransaksi" value="<?=date('dmy')."01".$row->id_category."02".$this->fungsi->customer_login()->id_user."03".date("His")?>">
                            <input type="hidden" name="iduser" id="iduser" value="<?=$this->fungsi->customer_login()->id_user?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Sablon</h6>
                            <h6 class="font-weight-medium" id="hargaSablon">Rp. 0</h6>
                            <input type="hidden" name="hargaSablon" id="hargaS" value="0">

                        </div>
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
<!-- /form register -->