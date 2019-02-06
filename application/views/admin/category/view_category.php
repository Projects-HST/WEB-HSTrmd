<div class="container">
  <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap mg-t-30">
                                    <div class="cmp-tb-hd cmp-int-hd">
                                        <h2>View Category </h2>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="data-table-basic" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php $i=1; foreach($result as $rows){ ?>


                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $rows->category_name; ?></td>

                                                    <td><?php if($rows->status=='Active'){ ?>
                                                       <button class="btn btn-success notika-btn-success waves-effect">Active</button>
                                                 <?php   }else{ ?>
                                                     <button class="btn btn-warning notika-btn-warning waves-effect">Inactive</button>
                                                     <?php   } ?>
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
$('#masters').addClass('active');
$('#mastersmenu').addClass('active');
</script>
