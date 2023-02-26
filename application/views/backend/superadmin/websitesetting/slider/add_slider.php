<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="window.history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
            <h2 class="nk-block-title fw-normal">Add Slider</h2>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
               <!-- .nk-block -->
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Add Slider</h4>
                </div>
            </div>
            <div class="row g-gs">
                <div class="col-lg-12">
                    <div class="card card-bordered h-100">
                        <div class="card-inner">
                            <form id="submit_form_data"  method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label class="form-label" for="slider_name">Slider Name</label>
                                  <div class="form-control-wrap">
                                      <input type="text" name="slider_name" class="form-control" id="slider_name">
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="slider_url">Slider Url</label>
                                <div class="form-control-wrap">
                                    <input type="text" name="slider_url" class="form-control" id="slider_url">
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="slider_sequence">Slider Sequence</label>
                                  <div class="form-control-wrap">
                                      <input type="number" name="slider_sequence" class="form-control" id="slider_sequence">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="slider_status">Slider Status</label>
                                  <div class="form-control-wrap ">
                                      <div class="form-control-select">
                                          <select class="form-control" id="slider_status" name="slider_status" >
                                              <option value="Active">Active</option>
                                              <option value="Deactive">Deactive</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="upload_image">Upload Slider Image</label>
                                  <div class="form-control-wrap">
                                      <input type="file" class="form-control upload_image" id="upload_image" name="slider_image">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label" for="phone-no"><img style="width: 200px; height: 200px;" id="upload_image_display" src="<?php  echo base_url(); ?>assets/backend/images/stock/e.jpg" alt=""></label>
                                  
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-lg btn-primary">Add Slider</button>
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
     var slider_image =  $('#upload_image').val(); 
     var slider_name =  $('#slider_name').val(); 
     var slider_url =  $('#slider_url').val(); 
     var slider_sequence =  $('#slider_sequence').val(); 
     var slider_status =  $('#slider_status').val(); 
       e.preventDefault();  
       if((!slider_name) && (!slider_image) && (!slider_url) && (!slider_sequence) && (!slider_status))  
       {  
        if(!slider_image){
         toastr.clear();
         NioApp.Toast('Please Select Image First.', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!slider_name){
         toastr.clear();
         NioApp.Toast('Please Enter Slider Title', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!slider_url){
         toastr.clear();
         NioApp.Toast('Please Enter Slider Url', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
        if(!slider_sequence){
         toastr.clear();
         NioApp.Toast('Please Enter Slider Sequence', 'error' ,{
              ui: 'is-dark',
              position: 'top-center'
         });
        }
       }else{  
            $.ajax({  
                 url:"<?php echo base_url(); ?>SSliderAddProcess",   
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