<?php
/*
Template Name: Front Page with Slider

*/

 ?>

			<section class="ba-slider ba-section">
				<div class="row">
					<div class="columns">

						<ul class="ba-slider" data-orbit data-options="bullets:false;
													slide_number:false;
					                  							timer: false;">
					                  							<?php
					                  							$sliderArgs = array(
					                  								'post_type'=>'slide',
					                  								'posts_per_page'=>-1,
					                  								// 'orderby'=>'',
					                  								 'order'=>'ASC'
					                  								);
					                  							$slider = new WP_Query($sliderArgs);
					                  							$i = 1;
					                  							?>
					                  								<?php if($slider->have_posts()): ?>
					                  									<?php while($slider->have_posts()): $slider->the_post() ?>
					                  										<li class="ba-slide" data-orbit-slide="slide-<?php echo $i++?>">
					                  										<?php the_post_thumbnail('slide') ?>
					                  											<div class="orbit-caption ba-slide__caption">
					                  												<h3 class="ba-slide__title">
					                  													<?php the_title() ?>
					                  												</h3>
					                  												<?php the_content() ?>
					                  											</div>
					                  										</li>
					                  									<?php endwhile; ?>
					                  								<?php endif;?>
							<!-- /.ba-slide -->
						</ul>

<?php get_header()?>
						<!-- /.slider -->
						<!-- slider-thimbnails -->
						<div class="ba-slider__thumbnails hide-for-small-only">
							<div class="row">
								<?php while ($slider->have_posts()): $slider->the_post()

								 ?>
								<div class="columns small-4 medium-2">
									<a href="#" data-orbit-link="slide-1">
										<?php the_post_thumbnail('slide-thumb') ?>
									</a>
								</div>
								<?php endwhile ?>
								<?php wp_reset_postdata(); ?>
							</div>
						</div>
						<!-- slider-thimbnails -->
					</div>
				</div>
			</section>
			<!-- /.ba-slider -->

			<section class="ba-section">
				<!-- BEGIN row  -->
				<div class="row ba-services-row">
				    <!-- BEGIN ba-service  -->
				    <?php if (have_rows('services')) : ?>
				    	 <?php while (have_rows('services')) : the_row(); ?>
				    	<div class="ba-service columns small-12 medium-4">
					        <h2 class="ba-service__title" >
					        		<?php the_sub_field('title') ?>
					        	</h2>
					       <div>
					       	<?php the_sub_field('text') ?>
					       </div>
					        <a href="<?php the_sub_field('button_link') ?>" class="button">MORE</a>
				    	</div>
				    	 <?php endwhile; ?>
				    <?php endif; ?>

				    <!-- END ba-service -->

				<!-- END row -->
			</section>
			<!-- /.ba-section -->
			<section class="ba-section">
				<div class="row">
					<div class="columns">
						<h2 class="ba-section__title">
							<span>
								<?php the_field('recent_works_section_title') ?>
							</span>
						</h2>
						<div class="row ba-works-row">
							<article class="ba-work columns small-12 medium-3">
								<a href="#" class="ba-work__thumb"><img src="<?php echo get_template_directory_uri() ?>/img/works/character-design.jpg" alt="Character Design"></a>
								<div class="ba-work__body">
									<h3 class="ba-work__title"><a href="#">Character Design</a></h3>
									<p class="ba-work__date">June 15, 2012</p>
								</div>
							</article>
							<article class="ba-work columns small-12 medium-3">
								<a href="#" class="ba-work__thumb"><img src="<?php echo get_template_directory_uri() ?>/img/works/brochure-design.jpg" height="184" width="220" alt="Brochure  Design"></a>
								<div class="ba-work__body">
									<h3 class="ba-work__title"><a href="#">Brochure  Design</a></h3>
									<p class="ba-work__date">June 15, 2012</p>
								</div>
							</article>
							<article class="ba-work columns small-12 medium-3">
								<a href="#" class="ba-work__thumb"><img src="<?php echo get_template_directory_uri() ?>/img/works/social-media-buttons.jpg" height="184" width="220" alt="Social Media Buttons"></a>
								<div class="ba-work__body">
									<h3 class="ba-work__title"><a href="#">Social Media Buttons</a></h3>
									<p class="ba-work__date">June 15, 2012</p>
								</div>
							</article>
							<article class="ba-work columns small-12 medium-3">
								<a href="#" class="ba-work__thumb"><img src="<?php echo get_template_directory_uri() ?>/img/works/10-amazing-websites.jpg" height="184" width="220" alt="10 Amazing Websites"></a>
								<div class="ba-work__body">
									<h3 class="ba-work__title"><a href="#">10 Amazing Websites</a></h3>
									<p class="ba-work__date">June 15, 2012</p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>
			<!-- /.ba-section -->
<?php get_footer() ?>