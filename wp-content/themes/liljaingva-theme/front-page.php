
<?php get_header(); ?>
		
			
			<section class="top-section">
				<div class="hero-image">
					<img src="<?php bloginfo('template_directory');?>/images/hero-images/woman-perspiration-fitness-1920px.jpg">
				</div>
				
				<div class="header-headlines">
					<h1>TAKTU SKREFIÐ</h1>
					<h3>- byrjaðu nýjan lífsstíl núna -</h3>
				</div>
				
				<div class="header-button">
					<a class="button button-yellow" href="#arangur">Smelltu hér</a>
				</div>
			</section>
			
			<section class="options options-img" id="arangur">
				<div class="options-content">
					
					<?php $query = new WP_Query( 'p=4' );
					
						if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

						echo '<center><h1>';
						the_title() ;
						echo '</h1></center>';

						the_content();
				
						endwhile; else:
		
						echo '<p>Engar færslur til að birta á þessari síðu.</p>';
		
						endif;
					?>
					
				</div>
				
				<div class="options-content-button">
					<a class="button button-yellow" href="#">Pantaðu tíma!</a>
				</div>
			</section>
			
			<section class="testimonials testimonials-img">
				<div class="testimonials-content">
					<h1>Umsagnir</h1>
					<div class="testimonials-content-left">
						
						<?php
					
					$argsUmsagnir = array('category_name' => 'umsagnir', 'posts_per_page' => 1, 'offset' => 0);
					$query = new WP_Query( $argsUmsagnir );
					
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							$secondPhoto = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' =>'any', 'post_parent' => $post->ID ); 
					$secondAttachments = get_posts( $secondPhoto );

							if ( $secondAttachments ) {
						foreach ( $secondAttachments as $secondAttachment ) {
							
							echo '<div class="image-and-name">';
							the_attachment_link( $secondAttachment->ID , true);							
							}
					} else {
						echo "Því miður vantar mynd með þessari færslu.";
					}
							echo '<a href="';
								the_permalink();
							echo '"><h2>';
								the_title();
							echo '</h2></a>';
							echo '</div>';
							echo '<p>';
								the_excerpt_max_charlength(200);
							echo '</p>';
						}
						
						echo '<a href="';
						the_permalink();
						echo '"><img class="testimonials-read-more-single" src="';
						bloginfo('template_directory');
						echo '/images/icons/three-arrows-right.png"></a>';
						wp_reset_postdata();

					} else {
						echo "Því miður finnst engin grein til að birta";
					}
				?>
						
					</div>
					
					<div class="testimonials-content-right">

					<?php
					
					$argsUmsagnir = array('category_name' => 'umsagnir', 'posts_per_page' => 1, 'offset' => 1);
					$query = new WP_Query( $argsUmsagnir );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							$secondPhoto = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' =>'any', 'post_parent' => $post->ID ); 
					$secondAttachments = get_posts( $secondPhoto );

							if ( $secondAttachments ) {
						foreach ( $secondAttachments as $secondAttachment ) {
							
							echo '<div class="image-and-name">';
							the_attachment_link( $secondAttachment->ID , true);							
							}
					} else {
						echo "Því miður vantar mynd með þessari færslu.";
					}
							
							echo '<a href="';
								the_permalink();
							echo '"><h2>';
								the_title();
							echo '</h2></a>';
							echo '</div>';
							echo '<p>';
								the_excerpt_max_charlength(200);
							echo '</p>';
							
						}
						
						echo '<a href="';
						the_permalink();
						echo '"><img class="testimonials-read-more-single" src="';
						bloginfo('template_directory');
						echo '/images/icons/three-arrows-right.png"></a>';
						wp_reset_postdata();

					} else {
						echo "Því miður finnst engin grein til að birta";
					}
				?>
						
					</div>
				</div>
				
				<div class="testimonials-read-more-button">
					<a href="<?php bloginfo('url'); ?>/umsagnir" class="button button-yellow">Fleiri umsagnir</a>
				</div>
			</section>
			
			<section class="about">
				<div class="about-content-center">
<!--
					<div class="about-content-img">
					<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/lilja-ingva.png"></a>
					</div>
					<div class="about-content">
-->


					<?php $query = new WP_Query( 'p=23' );
					
						if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
						
						echo '<div class="about-content-img"><a href="';
							the_permalink();
						echo '"><img src="';
							bloginfo('template_directory');
						echo '/images/lilja-ingva.png"></a></div><div class="about-content">';
						
						
						
						echo '<a href="';
						the_permalink();
						echo '"><h1>';
							the_title() ;
						echo '</h1></a>';
						echo '<p>';
							the_excerpt();
						echo '</p>';
						endwhile; else:
		
						echo '<p>Engar færslur til að birta á þessari síðu.</p>';
		
						endif;
					?>
<div class="about-button">
						<a href="<?php the_permalink(); ?>" class="button button-yellow">Lesa meira</a>
					</div>
					
					</div>
					
				</div>
			</section>
			
			<?php get_footer(); ?>