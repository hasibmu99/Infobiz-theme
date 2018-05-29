<?php

/**
 * Template Name: Welcome Template
 */
get_header();
?>
	

	
		<!-- 
		=============================================
			Our Service
		============================================== 
		-->
		<div class="our-service section-margin-bottom-two">
			<div class="container">
				<div class="row">
				<?php 
					
					$services = cs_get_option('services');
					$button = cs_get_option('disable_button') == NULL ? false : true;
					
				?>
			<?php if($button == true): ?>
				<?php foreach($services as $service) : ?>
					<div class="col-md-4 col-sm-6 col-xs-12">

						<div class="single-service">
							<div class="text">
								<h4><a href="<?=esc_url($service['service_link']);?>"><?=esc_attr($service['service_title']);?></a> <span><?=esc_attr($service['service_number']);?></span></h4>
								<?=wpautop($service['content_text']);?>
							</div> <!-- /.text -->
						</div> <!-- /.single-service -->

					</div> <!-- /.col- -->
				
				<?php endforeach; ?>
			<?php endif; ?>
					
			</div> <!-- /.container -->
		</div> <!-- /.our-service -->


		<!-- 
		=============================================
			Consultant Banner
		============================================== 
		-->
		<div class="consultant-banner section-margin-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12">
						<h3>Are You Ready for the Talent Consultant ?</h3>
						<p>How workforce development programs turn talent puddles into talent pools , Hiring isn’t easy. Employers might get hundreds </p>
					</div> <!-- /.col- -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<a href="#" class="theme-button-one float-right">Try It Now</a>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.consultant-banner -->


		<!-- 
		=============================================
			Our Service
		============================================== 
		-->
		<div class="our-service section-margin-bottom-two">
			<div class="container">

				<div class="theme-title">
					<h2>Business Services</h2>
					<p>How workforce development programs turn talent puddles into talent pools , Hiring isn’t easy. Employers <br> might get hundreds </p>
					<a href="service.html" class="theme-button-one">See More Services</a>
				</div> <!-- /.theme-title -->
				
				<?php if(have_posts()): ?>
					<div class="row">
						<?php 
							$query = new WP_Query([
								'post_type'			=> 'blog_post',
								'posts_per_page' 	=> -1,
								'order_by'			=> 'menu_order',
								'order'				=> 'ASC'
							]);

							// var_dump($query);
							
						?>
						<?php 
							while($query->have_posts()): 
								$query->the_post();
								$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full' );

						?>
							<div class="col-md-4 col-sm-6 col-xs-12">

								<div class="single-service">
									<div class="image"><img src="<?php echo $image[0];?>"></div>
									<div class="text">
										<h4><a href="service-details.html"><?=esc_attr(the_title());?></a> <i class="flaticon-pie-chart"></i></h4>
										<p><?php echo the_content(); ?></p>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->

							</div> <!-- /.col- -->
						<?php endwhile;?>
					</div> <!-- /.row -->
				<?php endif;?>
				
			</div> <!-- /.container -->
		</div> <!-- /.our-service -->


		<!--
		=============================================
			Consultation Help
		==============================================
		-->
		<div class="consultation-help clearfix section-margin-bottom">
			<div class="container">
				
				<div class="theme-title">
					<h2>Request a Free Consultation</h2>
					<p>How workforce development programs turn talent puddles into talent pools , Hiring isn’t easy. Employers <br> might get hundreds </p>
				</div> <!-- /.theme-title -->
				
			</div> <!-- /.container -->
			<div class="clearfix">
				<div class="section-part float-left">
					<div class="consultation-form-wrapper float-right col">
						<form action="#">
							<select class="selectpicker" name="category">
								<option value="Investment Plan">Investment Plan</option>
								<option value="Material">Material</option>
								<option value="Electronics ">Electronics </option>
								<option value="Industry">Industry</option>
							</select>
							<input type="text" placeholder="Name">
							<input type="email" placeholder="Email">
							<input type="text" placeholder="Phone">
							<button class="theme-button-one p-bg-color">Submit Request</button>
						</form>
					</div> <!-- /.consultation-form-wrapper -->
				</div> <!-- /.section-part -->

				<div class="section-part float-left text-wrapper">
					<div class="opacity clearfix">
						<div class="col float-left">
							<h3>27 Years of <br>Experience in <span class="p-color">Finance</span> <br>&amp; Business</h3>
							<p>Hiring isn’t easy. Employers might get hundreds — sometimes thousands — of resumes for a single open position and still, somehow, hire the wrong </p>
							<a href="service.html" class="theme-button-one">See Services</a>
						</div> <!-- /.col -->
					</div> <!-- /.opacity -->
				</div> <!-- /.section-part -->
			</div>
		</div> <!-- /.consultation-help -->


		<!-- 
		=============================================
			Our Project
		============================================== 
		-->
		<div class="our-project section-margin-bottom-two">
			<div class="container">
				<div class="theme-title">
					<h2>Our Projects</h2>
					<p>How workforce development programs turn talent puddles into talent pools , Hiring isn’t easy. Employers <br> might get hundreds </p>
					<a href="project.html" class="theme-button-one">See More Projects</a>
				</div> <!-- /.theme-title -->

				<div class="row">

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-project">
							<div class="image"><img src="<?php echo get_template_directory_uri();?>/images/project/1.jpg" alt=""></div>
							<div class="text">
								<h4><a href="project-details.html">Inobiz Business Inc.</a> <i class="flaticon-pie-chart"></i></h4>
								<p>Accounting, Idea</p>
							</div> <!-- /.text -->
						</div> <!-- /.single-project -->
					</div> <!-- /.col- -->

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-project">
							<div class="image"><img src="<?php echo get_template_directory_uri();?>/images/project/2.jpg" alt=""></div>
							
							<div class="text">
								<h4><a href="project-details.html">Chanze Renovation Inc.</a> <i class="flaticon-clipboard"></i></h4>
								<p>Business, Idea</p>
							</div> <!-- /.text -->
						</div> <!-- /.single-project -->
					</div> <!-- /.col- -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-project">
							<div class="image"><img src="<?php echo get_template_directory_uri();?>/images/project/3.jpg" alt=""></div>
							<div class="text">
								<h4><a href="project-details.html">Cllo Financial Inc.</a> <i class="flaticon-puzzle"></i></h4>
								<p>Services, Idea</p>
							</div> <!-- /.text -->
						</div> <!-- /.single-project -->
					</div> <!-- /.col- -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.our-project -->
		


		<!-- 
		=============================================
			Client Section
		============================================== 
		-->
		<div class="client-section section-margin-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-xs-12">
						<div class="client-slider-content">
							<h3>Clients Say</h3>
							<div class="client-slider">
								<div class="item">
									<div class="wrapper">
										<div class="name">
											<p>Mahfuz Riad <span>( CEO )</span></p>
											<div class="icon"><img src="<?php echo get_template_directory_uri();?>/images/logo/icon1.png" alt=""></div>
										</div>
										<div class="text">
											<h5>Great Service Inobiz </h5>
											<p>Incredibly easy to use them and extremely versatile! This is one of the best quality themes I have purchased. I’m impressed with the features. Of note, customer service was very friendly,</p>
										</div>
									</div> <!-- /.wrapper -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="wrapper">
										<div class="name">
											<p>Mahfuz Riad <span>( CEO )</span></p>
											<div class="icon"><img src="<?php echo get_template_directory_uri();?>/images/logo/icon1.png" alt=""></div>
										</div>
										<div class="text">
											<h5>Great Service Inobiz </h5>
											<p>Incredibly easy to use them and extremely versatile! This is one of the best quality themes I have purchased. I’m impressed with the features. Of note, customer service was very friendly,</p>
										</div>
									</div> <!-- /.wrapper -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="wrapper">
										<div class="name">
											<p>Mahfuz Riad <span>( CEO )</span></p>
											<div class="icon"><img src="<?php echo get_template_directory_uri();?>/images/logo/icon1.png" alt=""></div>
										</div>
										<div class="text">
											<h5>Great Service Inobiz </h5>
											<p>Incredibly easy to use them and extremely versatile! This is one of the best quality themes I have purchased. I’m impressed with the features. Of note, customer service was very friendly,</p>
										</div>
									</div> <!-- /.wrapper -->
								</div> <!-- /.item -->
							</div> <!-- /.client-slider -->
						</div> <!-- /.client-slider-content -->
					</div> <!-- /.col- -->

					<div class="col-md-5 col-xs-12">
						<div class="our-partner">
							<h3>Our Partner</h3>
							<div class="row">
								<div class="col-md-6 col-sm-3 col-xs-6"><img src="<?php echo get_template_directory_uri();?>/images/logo/p1.jpg" alt=""></div>
								<div class="col-md-6 col-sm-3 col-xs-6"><img src="<?php echo get_template_directory_uri();?>/images/logo/p2.jpg" alt=""></div>
								<div class="col-md-6 col-sm-3 col-xs-6"><img src="<?php echo get_template_directory_uri();?>/images/logo/p3.jpg" alt=""></div>
								<div class="col-md-6 col-sm-3 col-xs-6"><img src="<?php echo get_template_directory_uri();?>/images/logo/p4.jpg" alt=""></div>
							</div>
						</div> <!-- /.our-partner -->
					</div> <!-- /.col- -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.client-section -->



		<!-- 
		=============================================
			Our Blog 
		============================================== 
		-->
		<div class="our-blog section-margin-bottom-two">
			<div class="container">
				<div class="theme-title">
					<h2>Our News</h2>
					<p>Our newst facts from our media office, programs turn talent puddles into talent pools , Hiring isn’t <br> easy. Employers might get hundreds </p>
					<a href="blog-grid.html" class="theme-button-one">See More News</a>
				</div> <!-- /.theme-title -->
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-blog">
							<div class="image"><img src="<?php echo get_template_directory_uri();?>/images/blog/1.jpg" alt=""></div>
							<div class="text">
								<div class="date">20 February 2017</div>
								<h4><a href="blog-details.html">Inobiz  Business Inc report</a></h4>
								<a href="#" class="author">By Mahfuz Riad</a>
								<a href="blog-details.html" class="view-more"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div> <!-- /.single-blog -->
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-blog">
							<div class="image"><img src="<?php echo get_template_directory_uri();?>/images/blog/2.jpg" alt=""></div>
							<div class="text">
								<div class="date">20 February 2017</div>
								<h4><a href="blog-details.html">Inobiz  Business Inc report</a></h4>
								<a href="#" class="author">By Mahfuz Riad</a>
								<a href="blog-details.html" class="view-more"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div> <!-- /.single-blog -->
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-blog">
							<div class="image"><img src="<?php echo get_template_directory_uri();?>/images/blog/3.jpg" alt=""></div>
							<div class="text">
								<div class="date">20 February 2017</div>
								<h4><a href="blog-details.html">Inobiz  Business Inc report</a></h4>
								<a href="#" class="author">By Mahfuz Riad</a>
								<a href="blog-details.html" class="view-more"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div> <!-- /.single-blog -->
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.our-blog -->


		<!-- 
		=============================================
			Bottom Banner
		============================================== 
		-->
		<div class="bottom-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12">
						<h3>If you have any querry for related Business… Just touch on this button</h3>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12">
						<a href="contact.html" class="theme-button-one float-right">Contact us</a>
					</div>
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.bottom-banner -->
<?php get_footer() ; ?>

