<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pesanan Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('ManajementUser')?>">Transaksi</a></li>
              <li class="breadcrumb-item active">Pesanan Barang</li>
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
                <!-- <div class="card-header">
                    <!-- <a href="<?=site_url('Account/add_admin')?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a> -->
                <!-- </div> -->
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Transaksi</th>
                        <th>Product</th>
                        <th>Color</th>  
                        <th>size</th>
                        <th>Ukuran Sablon</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                    foreach($row->result() as $key => $data){
                    ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->kode_transaksi?></td>
                        <td><?=$data->nama_product?></td>
                        <td><?=$data->color?></td>
                        <td><?=$data->size?></td>
                        <td>(<?=$data->ukuran_sablon?>) - <?=$data->spesification?></td>
                        <td><?php
                        if($data->status == 1){
                            echo "<p class='text-danger'>Menunggu Pembayaran</p>";
                        }
                        else if($data->status == 2){
                            echo "<p class='text-success'>Sedang Proses Penyablonan</p>";
                        }else if($data->status == 3){
                            echo "<p class='text-warning'>Siap di Ambil</p>";
                        }else{
                            echo "<p class='text-primary'>Siap Dikirim</p>";
                        }
                        ?></td>
                        <td>
                            <button class="btn btn-sm btn-primary"><i class="fa fa-pencil">Edit</i></button>
                        </td>
                    </tr>
                    <?php 
                    } ?>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>