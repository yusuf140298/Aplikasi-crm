<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Transaksi</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
    <!-- Breadcrumb End -->

<!-- Checkout Start -->
<div class="container-fluid">
    <?=form_open_multipart('Transaksi/bayar')?>
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Check Out</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="row">
                    <div class="col-md-12 form-group pt-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="jsp" name="jsp" value="1">
                            <label class="custom-control-label" for="jsp">Gunakan Jasa Pengiriman</label>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" placeholder="Doe">
                    </div> -->
                    <div id="pengiriman" class="col-md-12">
                        <div class="col-md-12 form-group">
                            <label>Provisi</label>
                            <select class="form-control" name="provinsi" id="provinsi">
                                <?php
                                $no=0;
                                foreach($provinsi as $prov){?>
                                    <option value="<?=$prov->id?>"><?=$prov->nama?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Kota/Kabupaten</label>
                            <select class="form-control" name="kota" id="kota">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="kecamatan">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Desa</label>
                            <select class="form-control" name="desa" id="desa">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="alamat">Alamat Lengkap</label>
                            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>kode Transaksi</h6>
                        <h6><?=$kode_transaksi?></h6>
                        <input type="hidden" name="hargap" id="hargap" value="<?=$hargaproduct?>">
                        <input type="hidden" name="hargas" id="hargas" value="<?=$hargasablon?>">
                        <input type="hidden" name="subT" id="subT" value="<?=$total?>">
                        <input type="hidden" name="kode" id="kode" value="<?=$kode_transaksi?>">
                        <input type="hidden" name="nama" id="nama" value="<?=$this->fungsi->customer_login()->nama?>">
                        <input type="hidden" name="email" id="email" value="<?=$this->fungsi->customer_login()->email?>">
                        <input type="hidden" name="no_tlp" id="no_tlp" value="<?=$this->fungsi->customer_login()->no_tlp?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Harga Per Product</p>
                        <p><?="Rp. ".$hargaproduct?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Quantity</p>
                        <p><?=$qty?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Harga Sablon</p>
                        <p><?="Rp. ".$hargasablon?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Jasa Pengiriman</p>
                        <p id="jp">Rp. 0</p>
                    </div>
                </div>
                <div class="border-bottom pt-3 pb-2">
                    <div class="d-flex justify-content-between">
                        <h6>Subtotal</h6>
                        <h6 id="subTotal"><?="Rp. ".$total?></h6>
                        <input type="hidden" name="subToValue" id="subToValue" value="">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="point" name="point" value="<?=$this->fungsi->customer_login()->point?>">
                                <label class="custom-control-label" for="point">Gunakan Point</label>
                            </div>
                        </div>
                        <h6 class="font-weight-medium" id="textP"><?=$this->fungsi->customer_login()->point?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Potongan Harga</h6>
                        <h6 class="font-weight-medium" id="potongan">Rp. 0</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5 id="totalKabeh">Rp. 0</h5>
                        <input type="hidden" name="potonganharga" id="potonganharga">
                        <input type="hidden" name="totalsemua" id="totalsemua">
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                <div class="bg-light p-30">
                    <!-- <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">ShopeePay</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Dana</label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                        </div>
                    </div> -->
                    <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                </div>
            </div>
        </div>
    </div>
    <?=form_close()?>

</div>
<!-- Checkout End -->
