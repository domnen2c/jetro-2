<?php
/*
Template Name: Portfolio

*/

 ?>

<?php get_header()?>
			<h1 class="ba-page-title">
				<?php single_post_title() ?>
			</h1>
			<?php
				$worksArgs = array(
					'post_type' => 'work',
					'post_per_page' => -1,
					// 'orderby' =>' ',
					// 'order' => ' '
				);
				$works = new WP_Query($worksArgs);
			?>
			<?php if($works->have_posts()): ?>


			<section class="ba-section">
				<div class="row">
					<div class="columns">
						<h2 class="ba-section__title"><span>Recent Works</span></h2>
						<div class="row ba-works-row">
						<?php $r=1; ?>
						<?php while($works ->have_posts()): $works-> the_post() ?>
							<article class="ba-work columns small-12 medium-3">
								<a href="#" class="ba-work__thumb">
									<?php if(has_post_thumbnail()) : ?>
									<?php  the_post_thumbnail('work-thumb')?>
									<?php else : ?>
										<img src="<?php get_bloginfo('temlate_uri')?>" alt="Design">
									<?php endif; ?>
								</a>
								<div class="ba-work__body">
									<h3 class="ba-work__title">
										<a href="#"><?php the_permalink() ?></a>
									</h3>
									<p class="ba-work__date">
										<?php echo get_the_date() ?>
									</p>
								</div>
							</article>
							<?php $r++; ?>
								<?php if ($r>4) {
									$r=1;
									echo "</div>";
									echo '<div class+"row ba-works-row small-up-4">';
								} ?>


						<?php endwhile; ?>
						</div>
					</div>
				</div>
			</section>
			<!-- /.ba-section -->
<?php endif; ?>
<?php get_footer() ?>