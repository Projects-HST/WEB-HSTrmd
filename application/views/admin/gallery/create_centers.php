<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Create Gallery </h2>
                        </div>
                        <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            ×</button>
        <?php echo $this->session->flashdata('msg'); ?>
    </div>
    <?php endif; ?>
                            <form method="post" action="<?php echo base_url(); ?>gallery/create_project" class="" enctype="multipart/form-data" id="myformsection" name="myformsection">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Project name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <input type="text" class="form-control" name="project_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Size</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <input type="text" class="form-control" name="size">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Address</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <input type="text" class="form-control" name="location">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">City</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <input type="text" class="form-control" name="city">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Completed</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <input type="text" class="form-control" name="completed">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Category name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <div class="">
                                         <select class="" name="cat_id" id="category_id" onchange="get_cat_id()">
                                           <option value=" ">--Select Category--</option>
                                           <?php foreach ($res_cat as $rows_cat){ ?>
                                                <option value="<?php echo $rows_cat->id; ?>"><?php echo $rows_cat->category_name; ?></option>
                                             <?php  } ?>
                         										</select>
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Sub Category</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <div class="">
                                            <select class="" name="sub_cat_id" id="sub_cat_id">

                                            </select>

                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Cover Photo</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <input type="file" class="form-control" name="cover_photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Status</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <div class="">
                                            <select class="" name="status" id="status">
                                              <option value="">--Select Status--</option>
                                              <option value="Active">Active</option>
                                              <option value="Inactive">Inactive</option>

                                               </select>
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="fm-checkbox">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button class="btn btn-success notika-btn-success waves-effect">Submit</button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>



              </div>
  </div>


</div>
<script type="text/javascript">
$('#staff').addClass('active');
$('#staffmenu').addClass('active');
  function get_cat_id(){
           var id = $('#category_id').val();

           $.ajax({
              type: 'POST',
              url: '<?php echo base_url(); ?>gallery/get_sub_cat_id',
              data: { id: id },
              dataType: "JSON",
              cache: false,
              success: function(data)  {
					    var stat=data.status;
					    $("#sub_cat_id").empty();
					    if(stat=="success"){
					    var res=data.sub_cat_id;
					    var len=res.length;
							 $('<option>').val('').text('Select').appendTo('#sub_cat_id');
					    for (i = 0; i < len; i++) {
					    $('<option>').val(res[i].id).text(res[i].sub_category_name).appendTo('#sub_cat_id');
					    }

					    }else{
					    $("#sub_cat_id").empty();
					    }
					    }
          });
      }
      $("#myformsection").validate({
             rules: {
                 project_name:{required:true},
                 location:{required:false },
                 cat_id:{required:true },
                 sub_cat_id:{required:true },
                 cover_photo:{required:true },
                 city:{required:true },
                 status:{required:true}
             },
             messages: {

                  project_name: { required:"Enter  Project name" },
                  location:"Enter the location",
                  cat_id:"select category",
                  sub_cat_id:"select Sub category",
                  cover_photo:"Upload cover image",
                   city:"Enter the city",
                  status:"Select Status"

                 }
         });
</script>
