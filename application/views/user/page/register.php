<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="<?=site_url('landing')?>">Home</a>
                <span class="breadcrumb-item active">Register</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- form register -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Register</span></h2>
        <div class="row px-xl-5 justify-content-center">
            <div class="col-lg-8 mb-5">
                <div class="contact-form bg-light p-30">
                    <!-- <div id="success"></div> -->
                    <form action="<?=site_url('Register')?>" name="sentMessage" novalidate="novalidate" method="post">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="nama" id="name" class="form-control" placeholder="Masukan Nama Lengkap">
                            <span class="error invalid-feedback"><?=form_error('nama')?></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="username" id="name" class="form-control" placeholder="Masukan Nama Lengkap">
                            <span class="error invalid-feedback"><?=form_error('username')?></span>
                        </div>
                        <div class="form-group">
                            <label for="name">No. Tlp</label>
                            <input type="text" name="no_tlp" id="name" class="form-control" placeholder="Masukan No.tlp">
                            <span class="error invalid-feedback"><?=form_error('no_tlp')?></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" name="email" id="name" class="form-control" placeholder="Masukan E-mail">
                            <span class="error invalid-feedback"><?=form_error('email')?></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" name="password" id="name" class="form-control" placeholder="Masukan Password">
                            <span class="error invalid-feedback"><?=form_error('password')?></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Confirm Password</label>
                            <input type="password" name="conpass" id="name" class="form-control" placeholder="Confirmasi Password">
                            <input type="hidden" name="rule" id="name" class="form-control" value="4">
                            <span class="error invalid-feedback"><?=form_error('conpass')?></span>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
<!-- /form register -->