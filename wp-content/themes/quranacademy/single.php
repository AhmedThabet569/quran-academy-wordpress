<?php get_header(); ?>

<!-- single-post -->
<section class="single-post" id="single-post">
	<div class="container">
		<div class="title text-center">
			<h2><?php the_title() ?></h2>
		</div>

		<div class="single-image">
			<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('full', array('class' => 'img-fluid'));
			}
			?>
		</div>
		<?php the_content(); ?>
	</div>
</section>
<!-- single-post -->

<?php get_footer(); ?>