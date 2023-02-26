<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="window.history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
            <h2 class="nk-block-title fw-normal">Add SubCategory</h2>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
               <!-- .nk-block -->
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Add SubCategory</h4>
                </div>
            </div>
            <div class="row g-gs">
                <div class="col-lg-12">
                    <div class="card card-bordered h-100">
                        <div class="card-inner">
                            <form id="submit_form_data"  method="post" enctype="multipart/form-data">
                             <div class="form-group">
                               <label class="form-label" for="cat_id">Category List</label>
                                <div class="form-control-wrap ">
                                  <div class="form-control-select">
                                      <select class="form-control" id="cat_id" name="cat_id" >
                                          <option value="">Select Category</option>
                                          <?php if($category_list){ 
                                                foreach ($category_list as $key => $category_list_single) {   
                                            ?>
                                          <option value="<?php echo $category_list_single->cat_id ?>"><?php echo $category_list_single->cat_title ?></option>
                                      <?php } } ?>
                                      </select>
                                  </div>
                               </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="sc_title">Title</label>
                                  <div class="form-control-wrap">
                                      <input type="text" name="sc_title" class="form-control" id="sc_title">
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="sc_sub_title">Detail</label>
                                <div class="form-control-wrap">
                                    <input type="text" name="sc_sub_title" class="form-control" id="sc_sub_title">
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="sc_amount">Amount</label>
                                  <div class="form-control-wrap">
                                      <input type="number" name="sc_amount" class="form-control" id="sc_amount">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="sc_sequence">Sequence</label>
                                  <div class="form-control-wrap">
                                      <input type="number" name="sc_sequence" class="form-control" id="sc_sequence">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="sc_status">Status</label>
                                  <div class="form-control-wrap ">
                                      <div class="form-control-select">
                                          <select class="form-control" id="sc_status" name="sc_status" >
                                              <option value="Active">Active</option>
                                              <option value="Deactive">Deactive</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="upload_image">Upload Image</label>
                                  <div class="form-control-wrap">
                                      <input type="file" class="form-control upload_image" id="upload_image" name="sc_image">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="phone-no"><img style="width: 200px; height: 200px;" id="upload_image_display" src="<?php  echo base_url(); ?>assets/backend/images/stock/e.jpg" alt=""></label>
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-lg btn-primary">Add SubCategory</button>
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
 var  original_image = base_url+'assets/backend/images/stock/e.jpg';
  $('#submit_form_data').on('submit', function(e){ 
     var sc_image =  $('#upload_image').val(); 
     var sc_title =  $('#sc_title').val(); 
     var sc_sub_title =  $('#sc_sub_title').val(); 
     var sc_amount =  $('#sc_amount').val(); 
     var sc_sequence =  $('#sc_sequence').val(); 
     var sc_status =  $('#sc_status').val(); 
       e.preventDefault();  
       if((!sc_title) && (!sc_image) && (!sc_sub_title) && (!sc_sequence) && (!sc_status) && (!sc_amount))  
       {  
        if(!slider_image){
         toastr.clear();
         NioApp.Toast('Please Select Image First.', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!sc_title){
         toastr.clear();
         NioApp.Toast('Please Enter Title', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!sc_amount){
         toastr.clear();
         NioApp.Toast('Please Enter Amount', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!sc_sub_title){
         toastr.clear();
         NioApp.Toast('Please Enter Detail', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!sc_sequence){
         toastr.clear();
         NioApp.Toast('Please Enter Sequence', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
       }else{  
            $.ajax({  
                 url:"<?php echo base_url(); ?>SSubCategoryAddProcess",   
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
                    $('#submit_form_data').trigger("reset");
                    $('#upload_image_display').attr('src', original_image)
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