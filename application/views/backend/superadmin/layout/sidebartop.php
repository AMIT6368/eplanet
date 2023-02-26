<div class="nk-wrap ">
    <!-- main header @s -->
    <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ms-n1">
                    <a href="javascript:void(0)" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-header-brand d-xl-none">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img" src="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png" srcset="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png" srcset="<?php  echo base_url(); ?>assets/frontend/all_in_all/assets/logoorignal512.png 2x" alt="logo-dark">
                    </a>
                </div><!-- .nk-header-brand -->
                <div class="nk-header-news d-none d-xl-block">
                    <div class="nk-news-list">
                        <a class="nk-news-item">
                            <div class="nk-news-icon">
                                <em class="icon ni ni-card-view"></em>
                            </div>
                            <div class="nk-news-text">
                                <p>One Positive thought can change your whole day. So the positive attitude can change your whole life.</p>
                            </div>
                        </a>
                    </div>
                </div><!-- .nk-header-news -->
                <div class="nk-header-tools">
                    <ul class="nk-quick-nav">
                        <li class="dropdown user-dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="user-toggle">
                                    <div class="user-avatar sm">
                                        <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info d-none d-md-block">
                                        <div class="user-status">Administrator</div>
                                        <div class="user-name dropdown-indicator"><?php echo $admindetail->full_name ? $admindetail->full_name : 'Admin'  ?></div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span><?php echo $admindetail->username ? $admindetail->username : 'Admin'  ?></span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text"><?php echo $admindetail->full_name ? $admindetail->full_name : 'Admin'  ?></span>
                                            <span class="sub-text"><?php echo $admindetail->email ? $admindetail->email : 'admin@gmail.com'  ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="<?php echo base_url();?>SAdminProfile"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="<?php echo base_url();?>SWebsiteSetting"><em class="icon ni ni-setting-alt"></em><span>Website Setting</span></a></li>
                                        <li><a href="<?php echo base_url();?>SLoginActivity"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                        <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="javascript:void(0)"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li><!-- .dropdown -->
                        <li class="dropdown notification-dropdown me-n1">
                            <a href="javascript:void(0)" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                <div class="dropdown-head">
                                    <span class="sub-title nk-dropdown-title">Notifications</span>
                                    <a href="javascript:void(0)">Mark All as Read</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="nk-notification">
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-notification -->
                                </div><!-- .nk-dropdown-body -->
                                <div class="dropdown-foot center">
                                    <a href="javascript:void(0)">View All</a>
                                </div>
                            </div>
                        </li><!-- .dropdown -->
                    </ul><!-- .nk-quick-nav -->
                </div><!-- .nk-header-tools -->
            </div><!-- .nk-header-wrap -->
        </div><!-- .container-fliud -->
    </div>