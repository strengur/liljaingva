<?php
 	/*
 		Template Name: Lilja Ingva - Blog
 	*/
 ?>
<?php get_header(); ?>

<div class="single-post">
	<div class="single-post-top-banner">
	</div>
	
	<?php $blogPosts = new WP_Query( 'category_name=blog'); ?>
	
	<div class="posts-names">
		<h1><?php the_title(); ?></h1>
	</div>
	
	<div class="single-post-content">

		<?php if ( $blogPosts->have_posts() ) : while ( $blogPosts->have_posts() ) : $blogPosts->the_post(); ?>

		<?php the_content(); ?>
		<?php echo '<hr>'; ?>	
<!--
		<div class="posts-nav">
			<div class="posts-nav-previous-link">
				
				<img src="<?php bloginfo('template_directory'); ?>/images/icons/left-arrow-yellow.png">
				<?php previous_post_link('%link', 'Fyrri umsögn', TRUE); ?>
			</div>
			<div class="posts-nav-next-link">
				<?php next_post_link('%link', 'Næsta umsögn', TRUE); ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/icons/right-arrow-yellow.png">
			</div>
		</div>
-->

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
	
<!--
	<div class="testimonials-read-more-button">
					<a href="<?php bloginfo('url'); ?>/umsagnir" class="button button-yellow">Til baka í umsagnir</a>
	</div>
-->
	
</div>


<?php get_footer(); ?>