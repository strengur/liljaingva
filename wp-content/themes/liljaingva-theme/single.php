<?php get_header(); ?>

<div class="single-page">
	<div class="single-page-top-banner">
	</div>
	<div class="posts-names">
					<h1><?php the_title(); ?></h1>
				</div>
	<div class="single-page-content">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

			<?php
				if ( comments_open() ) :
					echo '<p>';
						comments_template();
					echo '</p>';
				endif;
			?>

		<?php endwhile; else: ?>

			<p>Engar færslur til að birta á þessari síðu.</p>

		<?php endif; ?>

	</div>

</div>


<?php get_footer(); ?>