
<?php get_header(); ?>
		<div class="wrapper">
			<div class="main-menu">
					<ul>
						<li>Menu Item 1</li>
						<li>Menu Item 2</li>
						<li>Menu Item 3</li>
					</ul>
				</div>
			
			<div class="logo">
				<img src="<?php bloginfo('template_directory');?>/images/lilja-ingva-logo.svg">
			</div>
			
			<section class="top-section">
				<div class="hero-image">
					<img src="<?php bloginfo('template_directory');?>/images/hero-images/woman-perspiration-fitness-1920px.jpg">
				</div>
				
				<div class="menu-icon">
					<img id="open" src="<?php bloginfo('template_directory');?>/images/icons/menu-icon-open.svg">
					<img id="close" src="<?php bloginfo('template_directory');?>/images/icons/menu-icon-close.svg">
				</div>
				
				<div class="header-headlines">
					<h1>TAKTU SKREFIÐ</h1>
					<h3>- byrjaðu nýjan lífsstíl núna -</h3>
				</div>
				
				<div class="header-button">
					<a class="button button-blue" href="#arangur">Smelltu hér</a>
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
					<a class="button button-blue" href="#">Pantaðu tíma!</a>
				</div>
			</section>
			
			<section class="testimonials testimonials-img">
				<div class="testimonials-content">
					<h1>Umsagnir</h1>
					<div class="testimonials-content-left">
						
						<?php
					
					$argsUmsagnir = array('category_name' => 'umsagnir', 'posts_per_page' => 1, 'offset' => 0);
					$query = new WP_Query( $argsUmsagnir );
					
					$secondPhoto = array( 'post_type' => 'attachment', 'posts_per_page' => 1, 'offset' => 0, 'post_status' =>'any' ); 
					$secondAttachments = get_posts( $secondPhoto );

					if ( $secondAttachments ) {
						foreach ( $secondAttachments as $secondAttachment ) {
							
							echo '<div class="image-and-name">';
							the_attachment_link( $secondAttachment->ID , true);
							
							}
					} else {
						echo "Því miður vantar mynd með þessari færslu.";
					}

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							
							echo '<a href="';
								the_permalink();
							echo '"><h2>';
								the_title();
							echo '</h2></a>';
							echo '</div>';
							echo '<p>';
								the_excerpt_max_charlength(310);
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
					
					$secondPhoto = array( 'post_type' => 'attachment', 'posts_per_page' => 1, 'offset' => 1, 'post_status' =>'any' ); 
					$secondAttachments = get_posts( $secondPhoto );

					if ( $secondAttachments ) {
						foreach ( $secondAttachments as $secondAttachment ) {
							
							echo '<div class="image-and-name">';
							the_attachment_link( $secondAttachment->ID , true);
							
							}
					} else {
						echo "Því miður vantar mynd með þessari færslu.";
					}

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							
							echo '<a href="';
								the_permalink();
							echo '"><h2>';
								the_title();
							echo '</h2></a>';
							echo '</div>';
							echo '<p>';
								the_excerpt_max_charlength(310);
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
					<button class="button button-yellow">Fleiri umsagnir</button>
				</div>
			</section>
			
			<section class="about">
				<div class="about-content">


					<?php $query = new WP_Query( 'p=23' );
					
						if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

						echo '<center><a href="';
						the_permalink();
						echo '"><h1>';
							the_title() ;
						echo '</h1></a></center>';
						echo '<p>';
							the_excerpt();
						echo '</p>';
						endwhile; else:
		
						echo '<p>Engar færslur til að birta á þessari síðu.</p>';
		
						endif;
					?>


<!--
					<h1>Ferðalagið mitt til þín</h1>
					<hr>
					
					<p>Árangursmyndir frá því rétt áður en ég tók mig taki í lok mars 2009 og brey 70 tti mínum lífstíl til frambúðar. 2013 um páska - 4 árum síðar var ég mætt á sviðið og keppti í fitness - sem var enn eitt markmið sem ég setti mér og náði. Hefði aldrei dreymt um það þegar ég stóð þarna í svarta kjólnum, of þung, illt í liðum og þreytt á eigin ástandi. Það er allt hægt með viljanum, þolinmæði og án öfga.</p>
					<p>Ég náði þessum árangri hægt og bítandi. Fór aldrei framúr sjálfum mér. Hér voru engar skyndilausnir, eingöngu gott matarræði ávallt og hreyfing sem beindist að mínum markmiðum og því sem mér fannst skemmtilegt. Það var aldrei svo að mér fannst þetta erfitt né leiðinlegt. Er svo glöð að hafa uppgötvað og fundið mig í þessum frábæra lífstil!!</p>
-->
					<div class="about-button">
						<a href="<?php the_permalink(); ?>" class="button button-blue">Lesa meira</a>
					</div>
				</div>
			</section>
			
			<?php get_footer(); ?>