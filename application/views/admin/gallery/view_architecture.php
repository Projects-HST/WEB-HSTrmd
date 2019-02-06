<div class="container">
  <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap mg-t-30">
                                    <div class="cmp-tb-hd cmp-int-hd">
                                        <h2>View Architecture Projects </h2>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="data-table-basic" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Project name</th>
                                                    <th>Cover</th>
                                                    <th>Location</th>
                                                    <th>city</th>
                                                    <th>completed</th>
                                                    <th>Sub Category </th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php $i=1; foreach($result as $rows){ ?>


                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $rows->project_name; ?></td>
                                                      <td><img src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows->cover_photo; ?>" width="100">
                                                        </td>
                                                    <td><?php echo $rows->location; ?></td>
                                                    <td><?php echo $rows->city; ?></td>
                                                    <td><?php echo $rows->completed; ?></td>
                                                    <td><?php echo $rows->sub_category_name; ?></td>
                                                    <td><?php if($rows->status=='Active'){ ?>
                                                       <button class="btn btn-success notika-btn-success waves-effect">Active</button>
                                                 <?php   }else{ ?>
                                                     <button class="btn btn-warning notika-btn-warning waves-effect">Inactive</button>
                                                     <?php   } ?>
                                                   </td>
                                                    <td>
                                                      <!-- <a onclick="delete_videos('<?php echo $rows->id; ?>')"><i class="fa fa-times" aria-hidden="true"></i></a> &nbsp;&nbsp; -->
                                                        <a href="<?php echo base_url(); ?>gallery/create_gallery/<?php echo base64_encode($rows->id *98765); ?>"><i class="fa fa-picture-o" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                                          <a href="<?php echo base_url(); ?>gallery/edit_gallery/<?php echo base64_encode($rows->id *98765); ?>">  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>



                                                    </td>
                                                </tr>
                                              <?php  $i++; } ?>
                                            </tbody>

                                        </table>
                                    </div>

                                </div>
                            </div>





              </div>
  </div>
</div>
<style>
.thumbnail {
        position: relative;
        width: 300px;
        height: 300px;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
    }

    #close {
        display: block;
        position: absolute;
        width: 30px;
        height: 30px;
        top: 2px;
        right: 2px;
        background: url(http://icons.iconarchive.com/icons/kyo-tux/delikate/512/Close-icon.png);
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
}
</style>
<script type="text/javascript">
$('#staff').addClass('active');
$('#staffmenu').addClass('active');


</script>
