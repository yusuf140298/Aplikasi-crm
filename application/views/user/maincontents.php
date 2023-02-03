<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The King Printing - Online Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?=base_url()?>assets/landing_page/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>assets/landing_page/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/landing_page/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>assets/landing_page/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php $this->load->view('user/layout/header')?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php $this->load->view('user/layout/navbar')?>
    <!-- Navbar End -->

    <!-- contens -->
      <?php echo $contents ?>
    <!-- end contens -->

    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">The King Printing & Clothing</h5>
                <p class="mb-4">Kepuasaan Pelanggan Adalaha Prioritas Kami</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jl. Utama Cikande Permai, Situterate, Kec. Cikande, Kabupaten Serang, Banten 42186</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>The_KingPrinting01@mail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+62 8954 0558 3600</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <!-- <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div> -->
                    </div>
                    <div class="col-md-4 mb-5">
                        <!-- <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div> -->
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Sosial Media</h5>
                        <p>Bisa Lihat Media Sosial Kami</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="<?=base_url()?>assets/landing_page/img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/landing_page/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/landing_page/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?=base_url()?>assets/landing_page/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?=base_url()?>assets/landing_page/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/landing_page/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('#sablon').change(function(){
                var id = $(this).val();
                
                // console.log(id);
                $.ajax({
                type : "POST",
                url : "<?=site_url('transaksi/get_data')?>",
                data : {
                    id: id
                },
                cache : false,
                dataType: "JSON",
                success: function(data){
                    $.each(data,function(image,price){
                        $('[name="image_sablon"]').attr('src',"<?php echo base_url()?>uploads/img_sablon/"+data.image);
                        document.getElementById("hargaSablon").innerHTML = "Rp. "+data.price
                        $('#hargaS').val(data.price);
                        // console.log(data.image);
                    });
                }
                });
                return false;
            });
            $('[name="size"]').change(function(){
                var val = $(this).val();
                // console.log(val);
                $('#sizeValue').val(val);
                document.getElementById("hargaProduct").innerHTML = "Rp. 0"
            })
            $('[name="color"]').change(function(){
                var idProduct = $('#idCategory').val();
                var size = $('#sizeValue').val();
                var val = $(this).val();
                // console.log(val+"-"+size+"-"+idProduct);
                $.ajax({
                type : "POST",
                url : "<?=site_url('transaksi/get_size')?>",
                data : {
                    idProduct:idProduct,
                    idSize:size,
                    val: val
                },
                cache : false,
                dataType: "JSON",
                success: function(data){
                    $.each(data,function(price){
                        // $('[name="image_sablon"]').attr('src',"<?php echo base_url()?>uploads/img_sablon/"+data.image);
                        // console.log(data.price);
                        if (data.price != null){
                        document.getElementById("hargaProduct").innerHTML = "Rp. "+data.price
                        $('#hargaP').val(data.price);
                    }
                    else{
                        document.getElementById("hargaProduct").innerHTML = "Rp. 0";
                        $('#hargaP').val(0);
                    }
                    // document.getElementById("subTotal").innerHTML = "Rp. "+data.price
                    });
                }
                });
                return false;
            })  
            $('#qty').change(function(){
                var qty = $(this).val();
                // console.log("asdasda");
            })
            // btnQty(function(){
            //     console.log("asdasd");
            // }) 
        })
    </script>
        
    <script>
        $(document).ready(function(){
            $('#pengiriman').css('display','none');
            $('#jsp').click(function(){
                if($('[name="jsp"]:checked').val() === '1'){
                    $('#pengiriman').slideDown(500)
                    var nilai = document.getElementById('subT').value;
                    var nilai2 = 10000
                    // var nilai3 = 20000
                    var total = parseFloat(nilai2) + parseFloat(nilai)
                    // console.log(total);
                    document.getElementById('jp').innerHTML = "Rp ."+nilai2
                    document.getElementById('subTotal').innerHTML = "Rp ."+total
                    $('#subToValue').val(total)

                }
                else{
                    $('#pengiriman').slideUp('fast');
                    var nilai = document.getElementById('subT').value;
                    // var nilai2 = 20
                    // var nilai3 = 20000
                    // var total = parseInt(nilai) - parseInt(nilai2)
                    document.getElementById("jp").innerHTML = "Rp. 0"
                    document.getElementById('subTotal').innerHTML = "Rp ."+nilai
                    $('#subToValue').val(nilai)



                }
            })
        })
    </script>

    <script>
        $(document).ready(function(){
            $("#provinsi").change(function (){
                var url = "<?php echo site_url('Transaksi/add_ajax_kota');?>/"+$(this).val();
                $('#kota').load(url);
                return false;
            })
   
            $("#kota").change(function (){
                var url = "<?php echo site_url('Transaksi/add_ajax_kec');?>/"+$(this).val();
                $('#kecamatan').load(url);
                return false;
            })

        $("#kecamatan").change(function (){
                var url = "<?php echo site_url('Transaksi/add_ajax_des');?>/"+$(this).val();
                $('#desa').load(url);
                return false;
            })
        })
    </script>
    <script>
        $(document).ready(function(){
            $('#point').click(function(){
                if($('[name="point"]:checked').val() >= '3000'){
                    var nilai = document.getElementById('subToValue').value;
                    var nilai2 = document.getElementById('textP').innerHTML;
                    var total = parseFloat(nilai) - parseFloat(nilai2)
                    // console.log(total);
                    document.getElementById('potongan').innerHTML = "(-) Rp ."+nilai2
                    document.getElementById('totalKabeh').innerHTML = "Rp ."+total
                    $('#potonganharga').val(nilai2)
                    $('#totalsemua').val(total)
                }
                else{
                    var nilai = document.getElementById('subToValue').value;
                    var nilai2 = document.getElementById('textP').innerHTML;
                    // var nilai3 = 20000
                    // var total = parseInt(nilai) - parseInt(nilai2)
                    document.getElementById("potongan").innerHTML = "Rp. 0"
                    document.getElementById('totalKabeh').innerHTML = "Rp ."+nilai
                    $('#potonganharga').val(0)
                    $('#totalsemua').val(nilai)


                }
            })
        })
    </script>
</body>

</html>