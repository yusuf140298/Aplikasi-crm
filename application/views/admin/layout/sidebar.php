 <aside class="main-sidebar sidebar-light-indigo elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>assets/admin/index3.html" class="brand-link">
      <img src="<?=base_url()?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Area</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=site_url('Profile/index/'.$this->fungsi->user_login()->id_user)?>" class="d-block"><?=$this->fungsi->user_login()->username?></a>
        </div>
      </div>
 
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=site_url('DashboardAdmin')?>" class="nav-link <?=$this->uri->segment(1) == 'DashboardAdmin'? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item <?=$this->uri->segment(1) == 'Account'? 'menu-is-opening menu-open' : '' ?>">
            <a href="#" class="nav-link <?=$this->uri->segment(1) == 'Account'? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Account Management
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if($this->session->userdata('rule') == 1 ) { ?>
              <li class="nav-item">
                <a href="<?=site_url('Account')?>" class="nav-link <?=$this->uri->segment(1) == 'Account'? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Account</p>
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="<?=site_url('Account/Accountusers')?>" class="nav-link <?=$this->uri->segment(1) == 'Account/Accountusers'? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member Account</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Sales
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposal</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">PRODUCTS MANAGEMENTS</li>
          <li class="nav-item">
            <a href="<?=site_url('Product')?>" class="nav-link <?=$this->uri->segment(1) == 'Product'? 'active' : '' ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Product
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('Category')?>" class="nav-link <?=$this->uri->segment(1) == 'Category'? 'active' : '' ?>">
              <i class="nav-icon fas fa-indent"></i>
              <p>
                Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('Package')?>" class="nav-link <?=$this->uri->segment(1) == 'Package'? 'active' : '' ?>">
              <i class="nav-icon far fa-clone"></i>
              <p>
                Package
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-header">EVENT</li>
          <li class="nav-item">
            <a href="<?=site_url('PointAward')?>" class="nav-link <?=$this->uri->segment(1) == 'PointAward'? 'active' : '' ?>">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Point Award
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('Voucher')?>" class="nav-link <?=$this->uri->segment(1) == 'Voucher'? 'active' : '' ?>">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Voucher
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-header">SUPPORT</li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-paste"></i>
              <p>
                Report
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link" data-toggle="modal" data-target="#logoutAdmin">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- modal loogut -->

  <div class="modal fade" id="logoutAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Log Out Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          are you sure you want to exit?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="<?=site_url('AuthAdmin/logout')?>" class="btn btn-primary">Log Out</a>
        </div>
      </div>
    </div>
  </div>