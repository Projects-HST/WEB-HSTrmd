

    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">2</span></h2>
                            <p>Total Categories</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">10</span></h2>
                            <p>Sub Categories</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                          <?php foreach($res_arch_count as $cnt_arch){} ?>
                            <h2><span class="counter"><?php echo $cnt_arch->count_arch; ?></span></h2>
                            <p>Total Architecture</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <?php foreach($res_int_count as $cnt_int){} ?>
                            <h2><span class="counter"><?php echo $cnt_int->count_int; ?></span></h2>
                            <p>Total Interiors</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
