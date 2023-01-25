<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <?php if($this->session->userdata('id_user') != null){?>
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i><?=$this->fungsi->customer_login()->nama?></h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <a href="" class="nav-item nav-link">Profile</a>
                    <a href="" class="nav-item nav-link">History Transaksi</a>
                    <a href="<?=site_url('Authentication/logout')?>" class="nav-item nav-link">Logout</a>
                </div>
            </nav>
        </div>
        <?php }?>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">The King</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?=site_url('Landing')?>" class="nav-item nav-link <?=$this->uri->segment(1) == 'Landing'? 'active' : '' ?>">Home</a>
                        <a href="<?=site_url('Transaksi')?>" class="nav-item nav-link <?=$this->uri->segment(1) == 'Transaksi'? 'active' : '' ?>">Shop</a>
                        <a href="<?=site_url('Landing/cek')?>" class="nav-item nav-link <?=$this->uri->segment(1) == 'Landing/cek'? 'active' : '' ?>">Cek Transaksi</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div> -->
                        <a href="<?=site_url('Landing/contact')?>" class="nav-item nav-link <?=$this->uri->segment(1) == 'Landing/contact'? 'active' : '' ?>">Contact</a>
                        <a href="contact.html" class="nav-item nav-link <?=$this->uri->segment(1) == 'asd'? 'active' : '' ?>">Help</a>
                    </div>
                    <?php if($this->session->userdata('id_user') != null){?>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="	fas fa-certificate text-primary"></i>
                            <span class="badge text-secondary" style="padding-bottom: 2px;">1,000</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary" style="padding-bottom: 2px;">2</span>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </nav>
        </div>
    </div>
</div>