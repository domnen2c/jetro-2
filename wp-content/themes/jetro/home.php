<?php get_header(); ?>

		<h1 class="ba-page-title">
			<?php single_post_title() ?>
		</h1>

			<div class="row">
				<div class="columns small-12 medium-9">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<article class="ba-post">
								<div class="ba-post-type">
								</div>
								<a href=" <?php the_permalink() ?> ">

									<?php
									the_post_thumbnail( 'post-thumbnail', array(
											'class' => 'ba-post__img'
											)
										);
									?>
								</a>
								<!-- <img class="ba-post__img" src="img/post/post1.jpg" alt="Post"> -->

								<div class="row">
									<div class="columns small-2 hide-for-small-only">
										<div class="ba-post-info">
											<h6 class="ba-post-info__title">Date</h6>
											<p class="ba-post-info__text">
												<?php echo get_the_date( ) ?>
											</p>
										</div>
										<div class="ba-post-info">
											<h6 class="ba-post-info__title">Tags</h6>
											<p class="ba-post-info__text">
												<?php the_tags( '' , ' | ') ?>
											</p>
										</div>
										<div class="ba-post-info">
											<h6 class="ba-post-info__title">Comments</h6>
											<p class="ba-post-info__text">
												<?php echo get_comments_number(); ?>
											</p>
										</div>
									</div>

									<div class="columns small-12 medium-10">
										<h3 class="ba-post__title">
											<a href=" <?php the_permalink() ?> ">
												<?php the_title() ?>
											</a>
										</h3>
										<!--  BEGIN -->
										<div class="ba-post__excerpt">
											<?php the_excerpt( ) ?>
										</div>
										<!-- END -->
									</div>
								</div>
								<!-- /.row -->

							</article>

						<?php endwhile; ?>

					<?php endif; ?>

					<ul class="ba-pager">
						<li class="current"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
					</ul>

				</div>
				<!-- /.column small-12 medium-9 -->

				<div class="columns small-3 hide-for-small-only">

					<?php get_sidebar() ?>

				</div>
				<!-- /.columns small-3 hide-for-small-only -->
			</div>


<main class="row">
	<div class="columns ba-content">


	</div>

</main>
<?php get_footer() ?>