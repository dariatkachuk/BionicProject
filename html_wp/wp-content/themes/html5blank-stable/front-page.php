<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="page_main_slider">
						<div class="main_slider-wrap">
						  <?php
		                            global $post;
		                            $args = array('post_type' => 'slider');
		                            $myposts = get_posts( $args );
		                            foreach( $myposts as $post ){ setup_postdata($post);
		                                ?>
		                                
		                                <div class="main_slider-item"><?php the_post_thumbnail(); ?></div>
		                                    
		                                <?php
		                            }
		                            wp_reset_postdata();
		                        ?>
						  
						</div>
		</div>


		<div class="container">
			<div class="main product_recent_posts">
					<h3 class="typography"><?php echo __('[:en]SHOW-ROOM NOVELTIES![:ru]НОВИНКИ ШОУ-РУМА!'); ?></h3>
					<div class="recent_posts_flex">

						<?php
	                        global $post;
	                        $args = array('posts_per_page' => 4);
			                $myposts = get_posts( $args );
	                        foreach( $myposts as $post ){ setup_postdata($post);
	                            ?>
	                            <div class="single-image">
	                            <a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
									<div class="single-product-hover">
										<p class="category-single-product-name"><?php the_title(); ?></p>
										<hr>
										<p class="category-single-product-price"><?php echo get_post_meta( $post->ID, 'coust', true ); ?></p>
									</div>
								</a>
	                       		</div>         
	                            <?php
	                        }
	                        wp_reset_postdata();
	                    ?>
          
					</div>
			</div>
		</div>


		<div class="content">

			<main class="container">
				<?php the_content() ?>
			</main>
		</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>