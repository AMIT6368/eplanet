<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="<?php echo  base_url(); ?>">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?php echo  base_url(); ?>assets/backend/images/favicon.png">
    <script src="<?php echo base_url();  ?>assets/frontend/jquery.min.js"></script>
    <!-- Page Title  -->
    <title><?php echo $title; ?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/backend/assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="<?php echo  base_url(); ?>assets/backend/assets/css/theme.css?ver=3.1.1">
     <!--notification js -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/frontend/notifications/css/lobibox.min.css" />
    <script src="<?php echo base_url();  ?>assets/frontend/notifications/js/lobibox.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/frontend/notifications/js/notifications.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/frontend/notifications/js/notification-custom-script.js"></script>
     <script src="<?php echo base_url();  ?>assets/frontend/common.js"></script>
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="<?php echo  base_url(); ?>" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="<?php echo  base_url(); ?>assets/backend/images/logo.png" srcset="<?php echo  base_url(); ?>assets/backend/images/logo2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="<?php echo  base_url(); ?>assets/backend/images/logo-dark.png" srcset="<?php echo  base_url(); ?>assets/backend/images/logo-dark2x.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p>Access the DashLite panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <!-- <form  method="POST" id="myForm"  autocomplete="off"> -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Email or Username</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" type="text" class="form-control form-control-lg" required id="email-address" placeholder="Enter your email address or username">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="<?php echo  base_url(); ?>">Forgot Code?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input autocomplete="new-password" type="password" class="form-control form-control-lg" required id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block  loginformsubmit" id="loginformsubmit">Sign in</button>
                                    </div>
                                <!-- </form> -->
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                    </ul><!-- .nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; <?php echo Date('Y') ?> E-Planet | All Rights Reserved </p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="<?php echo  base_url(); ?>assets/backend/images/slides/promo-a.png" srcset="<?php echo  base_url(); ?>assets/backend/images/slides/promo-a2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>E-Planet</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="<?php echo  base_url(); ?>assets/backend/images/slides/promo-b.png" srcset="<?php echo  base_url(); ?>assets/backend/images/slides/promo-b2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>E-Planet</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="<?php echo  base_url(); ?>assets/backend/images/slides/promo-c.png" srcset="<?php echo  base_url(); ?>assets/backend/images/slides/promo-c2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>E-Planet</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->


    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?php echo  base_url(); ?>assets/backend/assets/js/bundle.js?ver=3.1.1"></script>
    <script src="<?php echo  base_url(); ?>assets/backend/assets/js/scripts.js?ver=3.1.1"></script>

    <script type="text/javascript">
     var base_url = '<?php echo  base_url();  ?>';
       $(document).ready(function() {  
                $.ajax({
                 type: 'POST',
                 url: base_url+'Getcookie',
                 data: {logintype: 'COOKIE'},
                 error: function() {
                     error_notification('Something Went Wrong. Please Try After Sometime.'); 
                 },
                 cache: false,
                 success: function(resultdata){
                  var resultdatamess = JSON.parse(resultdata);
                  if(resultdatamess.statusCode==200)
                  {  
                    window.setTimeout(function () {
                    if(resultdatamess.Usertype=='Superadmin'){
                         location.href = "SDashboard";
                    }
                    }, 1500);
                  }
                }
            });
           
          });
          
          
    $('body').on('click','#loginformsubmit',function(){
        var username= $('#email-address').val();
        var Password= $('#password').val();
        if((username) && (Password)) 
        {
         $.ajax({
             type: 'POST',
             url: base_url+'LoginProcess',
             data: {username: username,loginpassword:Password},
             error: function() {
                error_notification('Something Went Wrong. Please Try After Sometime.'); 
             },
             cache: false,
             success: function(resultdata){
              var resultdatamess = JSON.parse(resultdata);
              if(resultdatamess.statusCode==200)
              { 
                success_notification(resultdatamess.message);
                window.setTimeout(function () {
                if(resultdatamess.Usertype=='Superadmin'){
                     location.href = "SDashboard";
                }else if(resultdatamess.Usertype=='Employee'){
                     location.href = "UDashboard";
                }else if(resultdatamess.Usertype=='Leader'){
                     location.href = "MDashboard";
                }else if(resultdatamess.Usertype=='SEmployee'){
                     location.href = "SBADashboard";
                }else{
                   error_notification('Something Went Wrong. Please Try Again');   
                }
                }, 1500);
              }
              else if(resultdatamess.statusCode==201)
              {
               error_notification(resultdatamess.message);    
              }
              else if(resultdatamess.statusCode==202)
              {
                warning_notification(resultdatamess.message);     
              }
              else if(resultdatamess.statusCode==203)
              {
                error_notification(resultdatamess.message);      
              }
            }
        });
        }else{
           if(!username)
           {
            error_notification('Please Enter Mobile Number');
           }
           if(!Password)
           {
            error_notification('Please Enter Password');
           } 
        }
 }); 
 
</script>
<style type="text/css">
  .center {
    display: initial !important;
  }
</style>
</html>