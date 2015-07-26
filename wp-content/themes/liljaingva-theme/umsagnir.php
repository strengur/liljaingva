<?php
	/* Template Name: Umsagnir */
?>
<?php wp_head(); ?>
<?php get_header(); ?>


			<section class="testimonials testimonials-listing-page-background">
				
				<div class="posts-names">
					<h1><?php the_title(); ?></h1>
				</div>
				

				<?php
					
					$argsUmsagnir = array('category_name' => 'umsagnir');
					$query = new WP_Query( $argsUmsagnir );
					
										
					echo '<div class="testimonials-listing-page">';
						echo '<div class="testimonials-listings">';

						echo '<ul>';	
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							echo '<li><div class="image-and-name">';
							$secondPhoto = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' =>'any', 'post_parent' => $post->ID ); 
					$secondAttachments = get_posts( $secondPhoto );

							if ( $secondAttachments ) {
						foreach ( $secondAttachments as $secondAttachment ) {
							
							
							the_attachment_link( $secondAttachment->ID , true);
							
							}
					} else {
						echo "Því miður vantar mynd með þessari færslu.";
					}
							
							
							echo '<a href="';
								the_permalink();
							echo '"><h2>';
								the_title();
							echo '</h2></a></div>';
							echo '<p>';
								the_excerpt_max_charlength(210);
							echo '</p>';
							
							echo '<a href="';
							the_permalink();
							echo '"><img class="testimonials-read-more-single" src="';
							bloginfo('template_directory');
							echo '/images/icons/three-arrows-right.png"></a>';
							wp_reset_postdata();
							echo '</li>';
							
							
						}
						
						

					} else {
						echo "Því miður finnst engin grein til að birta";
						echo '</div>';
						echo '</div>';
						
					}
					echo '</ul>';
					echo '</div>';
						echo '</div>';
					
				?>

			</section>


<?php get_footer(); ?>