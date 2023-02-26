<!-- content @s -->
<div class="nk-content ">
  <div class="container-fluid">
      <div class="nk-content-inner">
          <div class="nk-content-body">
              <div class="components-preview wide-md mx-auto">
                  <div class="nk-block-head nk-block-head-lg wide-sm">
                      <div class="nk-block-head-content">
                          <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="window.history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                          <h2 class="nk-block-title fw-normal">Category List</h2>
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
                                          <th>Title</th>
                                          <th>Details</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php if($category_list){
                                      foreach ($category_list as $key => $category_list_single) {
                                     ?>
                                      <tr id="data<?php echo $category_list_single->cat_slug;  ?>">
                                          <td><?php echo $category_list_single->cat_sequence; ?></td>
                                          <td><img style="width: 50px; height:50px;" src="<?php echo base_url(); ?><?php echo $category_list_single->cat_image; ?>"></td>
                                          <td><?php echo $category_list_single->cat_title; ?></td>
                                          <td><?php echo $category_list_single->cat_details; ?></td>
                                          <td>
                                            <button data-slug="<?php echo $category_list_single->cat_slug;  ?>" data-status="<?php echo $category_list_single->cat_status ?>" class="change_status btn btn-<?php if($category_list_single->cat_status=='Active'){ echo 'success'; }else{ echo 'danger'; } ?>" id="<?php echo $category_list_single->cat_slug;  ?>"> <?php  echo $category_list_single->cat_status; ?> </button>
                                          </td>
                                          <td>
                                            <a href="<?php echo  base_url(); ?>SCategoryEdit/<?php echo $category_list_single->cat_slug;  ?>"><button class="btn btn-dark"><em class="bi bi-pencil-square"></em></button></a>
                                            <button data-slug-delete="<?php echo $category_list_single->cat_slug;  ?>" class="btn btn-dark delete_data"><em class="fas fa-trash"></em></button>
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
$(".change_status").click(function(event){
 var cat_slug = $(this).attr('data-slug');
 var status = $(this).attr('data-status');
  if(status=='Active'){
     var cat_status = 'Deactive';
     $("#"+cat_slug).removeClass("btn-success");
     $("#"+cat_slug).addClass("btn-danger");
     $(this).attr('data-status',cat_status);
     $("#"+cat_slug).html(cat_status);
  }else{
    var cat_status = 'Active';
    $("#"+cat_slug).removeClass("btn-danger");
    $("#"+cat_slug).addClass("btn-success");
    $(this).attr('data-status',cat_status);
    $("#"+cat_slug).html(cat_status);
  }
  $.ajax({  
       url:"<?php echo base_url(); ?>SCategoryChangeStatus",   
       method:"POST",  
       data:{cat_slug:cat_slug,cat_status:cat_status},    
       cache: false,    
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
          }else{
            toastr.clear();
            NioApp.Toast(resultdatamess.message, 'error' ,{
                ui: 'is-dark',
                position: 'top-center'
           });
          } 
       }  
  }); 
});
$(".delete_data").click(function(event){
 var cat_slug = $(this).attr('data-slug-delete');
 Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!'
    }).then(function (result) {
      if (result.value) {
      $.ajax({  
             url:"<?php echo base_url(); ?>SCategoryDelete",   
             method:"POST",  
             data:{cat_slug:cat_slug},    
             cache: false,    
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
                $("#data"+cat_slug).hide("slow");
                }else{
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
    event.preventDefault();
  });
});  
 </script>  