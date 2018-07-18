<?php  /* Template Name: Bespoke Page */ get_header(); ?>

	<main>
		<!-- Wrap begin -->
		<div class="container">


		<!--Bespoke begin -->
			

				<h1 class="bespoke"><?php the_title(); ?></h1>
			
		</div>		

					<div class="page_bespoke_slider">
						<div class="bespoke_slider-wrap">
						  <?php
		                            global $post;
		                            $args = array('post_type' => 'bespoke', 'posts_per_page' => 20 );
		                            $myposts = get_posts( $args );
		                            foreach( $myposts as $post ){ setup_postdata($post);
		                                ?>
		                                <div class="bespoke_slider-item"><?php the_post_thumbnail(); ?></div>
		                                    
		                                <?php
		                            }
		                            wp_reset_postdata();
		                        ?>
						</div>
					</div>
		<div class="container">
			<div class="bespoke_content">
				
					<div class="content_bespoke_text">
						<?php the_content(); ?>
					</div>

				<div class="page_bespoke_prices">
				<?php
				$table = get_field( 'models' );

					if ( $table ) {

					    echo '<table>';

					        if ( $table['header'] ) {

					            echo '<thead>';

					                echo '<tr>';

					                    foreach ( $table['header'] as $th ) {

					                        echo '<th>';
					                            echo $th['c'];
					                        echo '</th>';
					                    }

					                echo '</tr>';

					            echo '</thead>';
					        }

					        echo '<tbody>';

					            foreach ( $table['body'] as $tr ) {

					                echo '<tr>';

					                    foreach ( $tr as $td ) {

					                        echo '<td>';
					                            echo $td['c'];
					                        echo '</td>';
					                    }

					                echo '</tr>';
					            }

					        echo '</tbody>';

					    echo '</table>';
					}
					?>
				
			</div>
			<!--Bespoke end -->
		</div>
		<div class="bespoke_action">
			<div class="btn"><?php echo __('[:en]Order[:ru]Заказать'); ?></div>
		</div>

	</div>
		<!-- Wrap end -->
	</main>


		           <!--BOPPAP BEGGIN  -->          
  <div class="background_form" style="display: none";>
        <div class="form">
            <h1 class="form_title"><?php echo __('[:en]Your order form[:ru]Форма Вашего заказа'); ?></h1>
			
			<?php echo do_shortcode("[contact-form-7 id='288' title='Контактная форма 1']"); ?>
            
        </div>
    </div>  

<?php get_footer(); ?>



