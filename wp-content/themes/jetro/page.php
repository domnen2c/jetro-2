<?php get_header(); ?>

<main class="row">
	<div class="columns ba-content">

	<?php
		if (have_posts()) :
			//start the loop.
			while (have_posts()):
				the_post(); ?>

			<article id="<?php the_ID() ?>">
				<h1 class="ba-page-title">
					<?php the_title(); ?>
				</h1>

				<?php the_content(); ?>
			</article>

			<?php endwhile; ?>
		<?php else : ?>
			<h1>Nothing found</h1>
		<?php endif; ?>
	</div>

</main>
<?php get_footer() ?>