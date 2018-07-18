<?php  /* Template Name: About Page */ get_header(); ?>

	<main>
		<!-- Wrap begin -->
		<div class="container">

		<div class="flex-container">
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!--About begin -->
			<div class="about_content">
				<h1 class="typography"><?php the_title(); ?></h1>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) :  ?>
					
						<?php the_post_thumbnail(); ?>

				<?php endif; ?>
				<!-- /post thumbnail -->
				
			
			<div class="page_content">

					<div class="content_about_text">
						<?php the_content(); ?>
					</div>
					<div class="page_content_photos">
						<?php
		                            global $post;
		                            $args = array('post_type' => 'about', 'posts_per_page' => 10 );
		                            $myposts = get_posts( $args );
		                            foreach( $myposts as $post ){ setup_postdata($post);
		                                ?>
		                                <div class="about_single_image"><?php the_post_thumbnail(); ?></div>
		                                    
		                                <?php
		                            }
		                            wp_reset_postdata();
		                        ?>
					</div>
			</div>
			<!--About end -->
			</div>

			<?php endwhile; ?>


			<?php endif; ?>


			<?php get_sidebar(); ?>

			</div>
		</div>
		<!-- Wrap end -->
	</main>

<?php get_footer(); ?>