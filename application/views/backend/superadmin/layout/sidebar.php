<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
<div class="nk-sidebar-element nk-sidebar-head">
    <div class="nk-menu-trigger">
        <a href="javascript:void(0)" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        <a href="javascript:void(0)" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
    </div>
    <div class="nk-sidebar-brand">
        <a href="<?php echo base_url(); ?>" class="logo-link nk-sidebar-logo">
            <img class="logo-light logo-img" src="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png" srcset="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png 2x" alt="logo">
            <img class="logo-dark logo-img" src="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png" srcset="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png 2x" alt="logo-dark">
        </a>
    </div>
</div><!-- .nk-sidebar-element -->
<div class="nk-sidebar-element nk-sidebar-body">
    <div class="nk-sidebar-content">
        <div class="nk-sidebar-menu" data-simplebar>
            <ul class="nk-menu">
                <li class="nk-menu-item">
                    <a href="<?php echo base_url();?>SDashboard" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                        <span class="nk-menu-text">Dashboard</span>
                    </a>
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-heading">
                    <h6 class="overline-title text-primary-alt">User Management</h6>
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item">
                    <a href="<?php echo base_url();?>SActiveUser" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                        <span class="nk-menu-text">Users</span><span class="nk-menu-badge">Active</span>
                    </a>
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item">
                    <a href="<?php echo base_url();?>SDeactiveUser" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                        <span class="nk-menu-text">Users</span><span class="nk-menu-badge">Inactive</span>
                    </a>
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-heading">
                    <h6 class="overline-title text-primary-alt">Website Setting</h6>
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                        <span class="nk-menu-text">Menu</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SMenuAdd" class="nk-menu-link"><span class="nk-menu-text">Add Menu</span></a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SMenuList" class="nk-menu-link"><span class="nk-menu-text">Menu List</span></a>
                        </li>
                    </ul><!-- .nk-menu-sub -->
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                        <span class="nk-menu-text">Slider</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SSliderAdd" class="nk-menu-link"><span class="nk-menu-text">Add Slider</span></a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SSliderList" class="nk-menu-link"><span class="nk-menu-text">Slider List</span></a>
                        </li>
                    </ul><!-- .nk-menu-sub -->
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                        <span class="nk-menu-text">Category</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SCategoryAdd" class="nk-menu-link"><span class="nk-menu-text">Add Category</span></a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SCategoryList" class="nk-menu-link"><span class="nk-menu-text">Category List</span></a>
                        </li>
                    </ul><!-- .nk-menu-sub -->
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-item has-sub">
                    <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                        <span class="nk-menu-text">Subcategory</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SSubCategoryAdd" class="nk-menu-link"><span class="nk-menu-text">Add Subcategory</span></a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url();?>SSubCategoryList" class="nk-menu-link"><span class="nk-menu-text">Subcategory List</span></a>
                        </li>
                    </ul><!-- .nk-menu-sub -->
                </li><!-- .nk-menu-item -->
                <li class="nk-menu-heading">
                    <h6 class="overline-title text-primary-alt">Tender</h6>
                </li><!-- .nk-menu-heading -->
                <li class="nk-menu-item has-sub">
                    <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                        <span class="nk-menu-text">Projects</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url(); ?>" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="<?php echo base_url(); ?>" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a>
                        </li>
                    </ul><!-- .nk-menu-sub -->
                </li><!-- .nk-menu-item -->
            </ul><!-- .nk-menu -->
        </div><!-- .nk-sidebar-menu -->
    </div><!-- .nk-sidebar-content -->
</div><!-- .nk-sidebar-element -->
</div>