<?php
 	/*
 		Template Name: Verðskrá
 	*/
 ?>
<?php get_header(); ?>

<div class="single-post">
	<div class="single-post-top-banner">
	</div>
		<div class="posts-names">
			<h1><?php the_title(); ?></h1>
		</div>
	<div class="price-lists">

		<div class="price-list-left">
			<?php

				
				$the_query = new WP_Query( 'p=76' );
	
				
				if ( $the_query->have_posts() ) {
					
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<h2>' . get_the_title() . '</h2>';
					}
					echo the_content();
				} else {
					echo 'Því miður fannst ekkert til að birta';
				}
				
				wp_reset_postdata();
			?>
		</div>
		
		<div class="price-list-right">
			<div class="price-list-right-fix">
				<?php
	
					
					$the_query = new WP_Query( 'p=78' );
		
					
					if ( $the_query->have_posts() ) {
						
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							echo '<h2>' . get_the_title() . '</h2>';
						}
						echo the_content();
					} else {
						echo 'Því miður fannst ekkert til að birta';
					}
					
					wp_reset_postdata();
				?>
			</div>
		</div>
		<div class="price-list-bottom">
			<?php

				
				$the_query = new WP_Query( 'p=87' );
	
				
				if ( $the_query->have_posts() ) {
					
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<h2>' . get_the_title() . '</h2>';
					}
					echo the_content();
				} else {
					echo 'Því miður fannst ekkert til að birta';
				}
				
				wp_reset_postdata();
			?>
		</div>

	</div>

	
</div>


<?php get_footer(); ?>