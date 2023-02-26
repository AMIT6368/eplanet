<!-- content @s -->
<div class="nk-content ">
  <div class="container-fluid">
      <div class="nk-content-inner">
          <div class="nk-content-body">
              <div class="components-preview wide-md mx-auto">
                  <div class="nk-block-head nk-block-head-lg wide-sm">
                      <div class="nk-block-head-content">
                          <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                          <h2 class="nk-block-title fw-normal">Menu List</h2>
                      </div>
                  </div><!-- .nk-block-head -->
                  <div class="nk-block nk-block-lg">
                      <div class="card card-bordered card-preview">
                          <div class="card-inner">
                              <table class="datatable-init-export nowrap table" data-export-title="Export">
                                  <thead>
                                      <tr>
                                          <th>S.No</th>
                                          <th>Image</th>
                                          <th>Name</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php if($menu_list){
                                      foreach ($menu_list as $key => $menu_list_single) {
                                     ?>
                                      <tr>
                                          <td><?php echo $menu_list_single->fm_order; ?></td>
                                          <td><img style="width: 50px; height:50px;" src="<?php echo base_url(); ?><?php echo $menu_list_single->fm_image; ?>"></td>
                                          <td><?php echo $menu_list_single->fm_name; ?></td>
                                          <td>
                                            <button  onclick="change_status('<?php echo $menu_list_single->fm_slug;  ?>','<?php echo $menu_list_single->fm_status ?>');" class="btn btn-<?php if($menu_list_single->fm_status=='Active'){ echo 'success'; }else{ echo 'danger'; } ?>"> <?php  echo $menu_list_single->fm_status; ?> </button>
                                          </td>
                                          <td>
                                            <a href="<?php echo  base_url(); ?>SMenuEdit/<?php echo $menu_list_single->fm_slug;  ?>"><button class="btn btn-dark">Edit</button></a>
                                          </td>
                                      </tr>
                                    <?php }}  ?>
                                  </tbody>
                              </table>
                          </div>
                      </div><!-- .card-preview -->
                  </div> <!-- nk-block -->
              </div><!-- .components-preview -->
          </div>
      </div>
  </div>
</div>
<!-- content @e -->
<script type="text/javascript">
$(document).ready(function(){  
  change_status(fm_slug,status){
  if(status=='Active'){
     var fm_status = 'Deactive';
  }else{
    var fm_status = 'Active';
  }

$.ajax({  
       url:"<?php echo base_url(); ?>SMenuChangeStatus",   
       method:"POST",  
       data:{fm_slug:fm_slug,fm_status:fm_status},  
       contentType: false,  
       cache: false,  
       processData:false,  
       success:function(data)  
       {  
          var resultdatamess = JSON.parse(data); 
          if(resultdatamess.statusCode==200)
          { 
          toastr.clear();
          NioApp.Toast(resultdatamess.message, 'success' ,{
                ui: 'is-dark',
                position: 'top-center'
           });
          location.reload();
          }
          else
          {
            toastr.clear();
            NioApp.Toast(resultdatamess.message, 'error' ,{
                ui: 'is-dark',
                position: 'top-center'
           });
          }
           
       }  
  }); 


 }

});  
 </script>  