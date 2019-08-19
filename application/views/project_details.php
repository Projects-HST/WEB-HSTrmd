<section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top no-padding-bottom wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
	<div class="container">
		<div class="row no-padding">
			<!-- section title -->
			<div class="col-md-2 text-center">
				<a href="<?php echo base_url(); ?>home">
					<img src="<?php echo base_url(); ?>assets/rmd.png" class="img-responsive rmd_logo">
					</a>
							<?php foreach($res_details as $rows_details){}
								if($rows_details->cat_id=='1') { ?>

                    <nav class="navbar navbar-inverse">
                            <div class="navbar-header">
                              <a class="navbar-brand" href="#">Menu Bar</a>
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                            <div class="navbar-collapse collapse">
                              <div class="">
                                  <h3 class="" style="color:#646466;margin-top:20px;text-align:left;">Architecture</h3>
                                  <ul class="portfolio-filter nav nav-tabs">
                                      <li class=""><a href="#" id="all">All </a></li>
                                      <li class=""><a href="#" id="comm">Commercial </a></li>
                                      <li class=""><a href="#" id="condominiums">Condominiums</a></li>
                                      <li class=""><a href="#" id="hospitality">Hospitality</a></li>
                                      <li class=""><a href="#" id="industrial">Industrial</a></li>
                                      <li class=""><a href="#" id="institution">Institutional</a></li>
                                      <li class=""><a href="#" id="residence">Residences</a></li>

                                  </ul>
                              </div>

                    </div>
                  </nav>
								<?php }else{?>
									<nav class="navbar navbar-inverse">
													<div class="navbar-header">
														<a class="navbar-brand" href="#">Menu Bar</a>
														<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</button>
													</div>
													<div class="navbar-collapse collapse">
														<div class="">
																<h3 class="" style="color:#646466;margin-top:20px;text-align:left;">Interiors</h3>
																<ul class="portfolio-filter nav nav-tabs">
																	<li class="nav"><a href="#" id="all">All </a></li>
																	<li class="nav"><a href="#" id="corporate">Corporate </a></li>
																	<li class="nav"><a href="#" id="cinemas">Cinemas </a></li>
																	<li class="nav"><a href="#" id="hospitality">Hospitality</a></li>
																	<li class="nav"><a href="#" id="residence">Residence</a></li>

																</ul>
														</div>

									</div>
								</nav>
							<?php	} ?>





				</div>
				<div class="col-md-10">
					<div class="row">
						<?php foreach($res_details as $rows_details){} ?>
						<div class="col-md-4">
							<h3 class="area-title text-capitalize  margin-20px-bottom font-weight-300 sm-width-100 xs-width-100"
                                  style="color: #646466;font-size: 30px;height: 105px;">
                              <?php echo $rows_details->project_name; ?></h3>

								<b>Type :</b>
								<p>Commercial</p>
								<b>Size :</b>
								<p>  <?php echo $rows_details->size; ?></p>
								<b>Address :</b>
								<p><?php echo $rows_details->location; ?><?php echo $rows_details->city; ?>
</p>
								<b>Status :</b>
								<p><?php echo $rows_details->completed; ?></p>
							</div>
							<div class="col-md-8">
								<div class="row ">
									<?php $cnt= count($res_gallery);
									if($cnt=='1'){
										foreach($res_gallery as $rows_gallery){ ?>
									 <div class="col-md-12 project_img ">
										 <div class="gallery-img gallery">
											 <a onclick="showmodal()">
												 <img class="content-image" src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows_gallery->gallery_img; ?>">
												 </a>
											 </div>
										 </div>

							 <?php } }else{
										foreach($res_gallery as $rows_gallery){ ?>
									 <div class="col-md-6 project_img ">
										 <div class="gallery-img gallery">
											 <a onclick="showmodal()">
												 <img class="content-image" src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows_gallery->gallery_img; ?>">
												 </a>
											 </div>
										 </div>

							 <?php }  } ?>





										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<a class="close" data-dismiss="modal" aria-hidden="true" style="color:#fff;font-size:12px;opacity:1;margin-top:8px;">X  </a>
								<h4 class="modal-title" id="myModalLabel"><?php echo $rows_details->project_name; ?></h4>
							</div>
							<div class="modal-body">
								<?php 			foreach($res_gallery as $rows_gallery){ ?>
								<div class="col-md-12 col-sm-12">
									<img src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows_gallery->gallery_img; ?>" class="img-responsive pop_img" alt="">
									</div>
								<?php } ?>
		 </div>


									<div class="modal-footer">
										<button type="button" class="btn btn-default close_btn" data-dismiss="modal" style="margin-right:10px;">Close</button>
									</div>
								</div>
							</div>
						</div>

						<!-- The Modal -->

						<!-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="//placehold.it/1000x600" class="img-responsive">
        </div>
    </div>
  </div>
</div> -->
<style>
.pop_img{
	margin-bottom: 10px;
}
.content-image{
	cursor: pointer;
}
</style>
