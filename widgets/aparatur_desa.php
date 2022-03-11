


<div class="row justify-content-center mt-5">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3>Aparatur Desa</h3>
            </div>
          </div>
        </div>
		<?php $dataarray = array_chunk($aparatur_desa['daftar_perangkat'],4);$counter = 0 ?>
		<div id="carouselExampleSlidesOnly" class="carousel slide p-5" data-mdb-ride="carousel">
			<div class="carousel-inner">
				<?php foreach($dataarray as $ad): ?>
					<div data-mdb-interval="3000" class="carousel-item <?php echo ($counter == 0) ? "active" : ""; $counter++ ?>">
						
						<div class="row">
						<?php foreach($ad as $data): ?>
							<div class="col-12 col-sm-6 col-lg-3">
								<div class="single_advisor_profile wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
								<!-- Team Thumb-->
								<div class="advisor_thumb"><img loading="lazy" class="card-img" src="<?php echo $data['foto'] ?>" alt="">
									<!-- Social Info-->
									<div class="social-info"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
								</div>
								<!-- Team Details-->
								<div class="single_advisor_details_info">
									<h6><?php echo $data['nama'] ?></h6>
									<p class="designation"><?php echo $data['jabatan'] ?></p>
								</div>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		</div>