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
	<div class="single-post-content" style="width: 100%;">

		<div style="display: inline-block; width: 59%; padding-left: 30px; position: relative; top: -128px;">
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
		
		<div style="background: #fff5cc; color: #d6ad00; display: inline-block; width: 36%; padding-left: 22px; position: relative;">
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
		<p><strong>Samningur er gerður fyrir alla þjálfun og greiðist hver mánuður fyrirfram</strong></p>
	</div>

	
</div>


<?php get_footer(); ?>