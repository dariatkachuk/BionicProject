<?php  /* Template Name: Training Page */ get_header(); ?>
<div class="container">
<div class="contact_study_h1">
        <h1><?php the_title(); ?></h1>
</div>
<section>

   <div class="study_conteiner">
    <?php

	    if(is_page(105)){
	    	$cat = 'master_classes';
	    } else if(is_page(189)){
			$cat = 'courses';
	    }
        global $post;
        $args = array('post_type' => $cat, 'posts_per_page' => 20 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){ setup_postdata($post);
            ?>
            <div class="study_data top_mrgn">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="study_image" class="study_img">
            <div class="study_description">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>    
            <?php
        }
        wp_reset_postdata();
     ?>
    </div>
</section>
</div>

<?php get_footer(); ?>