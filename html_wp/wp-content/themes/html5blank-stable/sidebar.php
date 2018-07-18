			<!--Sidebar begin -->
		<div class="about_sidebar">
					<!--Instagram widget begin -->
					<div class="widget_instagram">
						
						<!-- InstaWidget -->
						<a href="https://instawidget.net/v/user/fueki_ryuko" id="link-8eba0e0dda6e0152735a6f98aab927445f8e824dbdccb66c276a49699a80039e">@fueki_ryuko</a>
						<script src="https://instawidget.net/js/instawidget.js?u=8eba0e0dda6e0152735a6f98aab927445f8e824dbdccb66c276a49699a80039e&width=100%"></script>

					</div>

					<!--Instagram widget end -->
			<div class="wrap_mobile">
				<!--Master-class recent post begin -->
				<div class="master-class_recent_post">
					<h3 class="typography"><?php echo __('[:en]Soon![:ru]Не пропусти!'); ?></h3>
					<?php
                        global $post;
                        $args = array('posts_per_page' => 1, 'post_type' => 'master_classes');
		                $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>

							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								<p class="recent_post_title"><?php the_title(); ?></p>
							</a>
                                
                            <?php
                        }
                        wp_reset_postdata();
                    ?>

				</div>

				<!--Master-class recent post end -->

				<!--Master-class recent post begin -->
				
				<div class="product_recent_posts">
					<h3 class="typography"><?php echo __('[:en]Novelties![:ru]Новинки!'); ?></h3>
					<div class="recent_posts_flex">


					<?php
                        global $post;
                        $args = array('posts_per_page' => 2);
		                $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>

                            <a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								<div class="new_product_info">
									<p class="new_product_title"><?php the_title(); ?></p>
									<p class="new_product_price"><?php echo get_post_meta( $post->ID, 'coust', true ); ?></p>
								</div>
							</a>
                                
                            <?php
                        }
                        wp_reset_postdata();
                    ?>

					</div>
				</div>
					<!--Master-class recent post end -->
			</div>
		</div>
			<!--Sidebar end -->