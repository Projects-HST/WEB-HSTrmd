<?php include("project_arc_header.php"); ?>
<section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top no-padding-bottom wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
	<div class="container">
		<div class="row no-padding">
			<!-- section title -->
			<div class="col-md-2 text-center">
				<a href="index.php">
					<img src="rmd.png" class="img-responsive rmd_logo" style="    margin-left: -6px;">
					</a>
					<div class="text-center">
						<!-- filter navigation -->
						<h3 class="" style="color:#646466;margin-top:20px;text-align:left;margin-left:-5px;">Architecture</h3>
						<ul class="portfolio-filter nav nav-tabs">
							<li class="">
								<a href="#" id="all">All </a>
							</li>
							<li class="">
								<a href="#" id="comm">Commercial </a>
							</li>
							<li class="">
								<a href="#" id="condominiums">Condominiums</a>
							</li>
							<li class="">
								<a href="#" id="hospitality">Hospitality</a>
							</li>
							<li class="">
								<a href="#" id="industrial">Industrial</a>
							</li>
							<li class="">
								<a href="#" id="institution">Institutional</a>
							</li>
							<li class="">
								<a href="#" id="residence">Residences</a>
							</li>
						</ul>
						<!-- end filter navigation -->
					</div>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-4">
							<h3 class="area-title text-capitalize  margin-20px-bottom font-weight-300 sm-width-100 xs-width-100"
                                  style="color: #646466;font-size: 30px;">
                                  Tiara</h3>
							<br>
								<b>Type :</b>
								<p>Condominiums</p>
								<b>Size :</b>
								<p>&nbsp;</p>
								<b>Address :</b>
								<p>Ponnamallee high road, chennai</p>
								<b>Completed :</b>
								<p>&nbsp;</p>
							</div>
							<div class="col-md-8">
								<div class="row ">
									<div class="col-md-6 project_img ">
										<div class="gallery-img gallery">
											<a onclick="showmodal()">
												<img class="content-image" src="architecture/condominiums/arihant_tiara/at_1.jpg">
												</a>
											</div>
										</div>
										<div class="col-md-6 project_img ">
											<div class="gallery-img gallery">
												<a onclick="showmodal()">
													<img class="content-image" src="architecture/condominiums/arihant_tiara/at_2.jpg">
													</a>
												</div>
											</div>

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
								<h4 class="modal-title" id="myModalLabel">Tiara</h4>
							</div>
							<div class="col-md-12 img_popup">
								<img src="architecture/condominiums/arihant_tiara/at_1.jpg" class="rounded mx-auto d-block modal_img" alt="">
								</div>
								<div class="col-md-12 img_popup">
									<img src="architecture/condominiums/arihant_tiara/at_2.jpg" class="rounded mx-auto d-block modal_img" alt="">
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default close_btn" data-dismiss="modal" style="margin-right:10px;">Close</button>
									</div>
								</div>
							</div>
						</div>
<?php include("project_arc_footer.php"); ?>
