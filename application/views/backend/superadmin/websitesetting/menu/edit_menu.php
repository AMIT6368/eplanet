<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub">
            	<a class="back-to" href="javascript:void(0)" onclick="window.history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
            </div>
            <h2 class="nk-block-title fw-normal">Update Menu</h2>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
               <!-- .nk-block -->
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Update Footer Menu</h4>
                </div>
            </div>
            <div class="row g-gs">
                <div class="col-lg-12">
                    <div class="card card-bordered h-100">
                        <div class="card-inner">
                            <form id="submit_form_data"  method="post" enctype="multipart/form-data">
                            	<input type="hidden" name="fm_id" value="<?php echo $menudetail->fm_id;  ?>">
                              <div class="form-group">
                                  <label class="form-label" for="fm_name">Menu Name</label>
                                  <div class="form-control-wrap">
                                      <input type="text" name="fm_name" class="form-control" id="fm_name" value="<?php echo $menudetail->fm_name;  ?>">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="fm_order">Menu Order</label>
                                  <div class="form-control-wrap">
                                      <input type="text" name="fm_order" class="form-control" id="fm_order" value="<?php echo $menudetail->fm_order;  ?>">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="fm_status">Menu Status</label>
                                  <div class="form-control-wrap ">
                                      <div class="form-control-select">
                                          <select class="form-control" id="fm_status" name="fm_status" >
                                              <option <?php if($menudetail->fm_status=='Active'){ echo 'selected'; } ?> value="Active">Active</option>
                                              <option  <?php if($menudetail->fm_status=='Deactive'){ echo 'selected'; } ?> value="Deactive">Deactive</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="upload_image">Upload Menu Image</label>
                                  <div class="form-control-wrap">
                                      <input type="file" class="form-control upload_image" id="upload_image" name="fm_image">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="phone-no"><img style="width: 200px; height: 200px;" id="upload_image_display" src="<?php  echo base_url(); ?><?php echo $menudetail->fm_image;  ?>" alt=""></label>
                                  
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-lg btn-primary">Update Menu</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
         <!-- .nk-block -->
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
  $('#submit_form_data').on('submit', function(e){ 
     var fm_image =  $('#upload_image').val(); 
     var fm_name =  $('#fm_name').val(); 
     var fm_id =  $('#fm_id').val(); 
     var fm_order =  $('#fm_order').val(); 
       e.preventDefault();  
       if((!fm_name) && (!fm_image) && (!fm_id) && (!fm_order))  
       {  
        if(!fm_image){
         toastr.clear();
         NioApp.Toast('Please Select Image First.', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!fm_name){
         toastr.clear();
         NioApp.Toast('Please Enter Menu Name', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
         if(!fm_id){
         toastr.clear();
         NioApp.Toast('Something Went Wrong', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
         window.history.go(-1);
        }
        if(!fm_order){
         toastr.clear();
         NioApp.Toast('Please Enter Menu Order Number', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
       }else{  
            $.ajax({  
                 url:"<?php echo base_url(); ?>SMenuEditProcess",   
                 method:"POST",  
                 data:new FormData(this),  
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
});  
 </script>  