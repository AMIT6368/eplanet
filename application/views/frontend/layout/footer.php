<!-- all Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url();  ?>assets/frontend/all_in_all/script.js"></script>
<script src="<?php echo base_url();  ?>assets/frontend/common.js"></script>

<script type="text/javascript">
var base_url = '<?php echo base_url(); ?>';
  setTimeout(function()
  {
    $(".loaderactive").css("display","none");
  }, 1000);

  $('body').on('click','.LogoutJS',function(){
   swal({
    title: "Are you sure?",
    text: "This will logout from your account.",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, I Want to logout",
    closeOnConfirm: false
   }, function() {
      $.ajax({
             type: 'POST',
             url: base_url+'LogoutJS',
             data: {action: 'logout'},
             cache: false,
             success: function(resultdata){
              var resultdatamess = JSON.parse(resultdata);
                  swal({
              title: resultdatamess.message,
              showCancelButton: false,
              confirmButtonColor: 'LightSeaGreen',
              confirmButtonText: 'Ok',
              type: "success",
              timer: 2000,
              }, function(){
                  window.location.href = base_url;
              });

              
            }
        }); 

});

});
</script>
</body>
</html>