<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="<?=site_url('landing')?>">Profile</a>
                <span class="breadcrumb-item active">History Transaksi</span>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col">
            <div class="bg-light p-30">
            <?php
            $no=0;
            foreach ($transaksi->result() as $key => $data) {
                if ($data->id_user == $this->fungsi->customer_login()->id_user) {    
            ?>    
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-10">
                            <h4 class="mb-4"><?=$data->nama_product?> - <?=$data->color?> (<?=$data->size?>) <small>(<?=$data->ukuran_sablon."-".$data->spesification?>)</small></h4>
                            <div class="media mb-4">
                                <img src="<?=base_url()?>assets/landing_page/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><?=$data->kode_transaksi?><small> - <i><?=$data->tanggal_transaksi?></i></small></h6>
                                    <div class="text-primary mb-2">
                                        <?php for ($i = 1; $i<=5; $i++ ){
                                            if($data->rate != null && $i <= $data->rate){
                                            ?>
                                            <i class="fas fa-star"></i>
                                        <?php }else{?>
                                            <i class="far fa-star"></i>
                                        <?php }
                                        } ?>
                                        <!-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i> -->
                                    </div>
                                    <p>Rp. <?=$data->total_bayar?></p>
                                    <?php if($data->komentar == null){?>
                                    <form action="<?=site_url('Komentar/add')?>" method="post">
                                    <div class="row">
                                        <div class="col-md-4 d-flex justify-content-center">
                                        <p class="pt-1 mr-3">Beri Rating : </p>
                                        <input type="hidden" name="kode" value="<?=$data->kode_transaksi?>">
                                        <input type="number" name="rate" id="rate" class="form-control w-50 text-center" max="5" min="1" value="1">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="komentar" id="komentar" class="form-control w-100" placeholder="Tulis komentar .....">
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-primary w-100">Kirim</button>
                                        </div>
                                    </div>
                                    </form>
                                    <?php } else{ ?>
                                        <p><?=$data->komentar?></p>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary float-right">Lihat detail</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            }?>
            
            </div>
        </div>
    </div>
</div>