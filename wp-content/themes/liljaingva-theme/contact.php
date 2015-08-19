<?php
 	/*
 		Template Name: Hafa Samband
 	*/
 ?>
<?php get_header(); ?>

<div class="single-post">
	<div class="single-post-top-banner">
	</div>
	<div class="posts-names">
					<h1><?php the_title(); ?></h1>
				</div>
	<div class="contact-form">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

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