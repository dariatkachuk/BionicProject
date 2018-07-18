<?php  /* Template Name: Contacts Page */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="container">   
            <div class="contact_study_h1">
            <h1><?php the_title(); ?></h1>
            </div>
            <div class="container_1">
                <div class="contacts_information">
                    <div class="top_info">
                        <h4><?php echo __('[:ru]Время работы [:en]Working hours'); ?></h4>
                        <?php echo get_post_meta( $post->ID, 'work_time' , true); ?>
                    </div>
                    <div class="bottom_info">
                         <h4><?php echo __('[:ru]Свяжитесь с нами [:en]Contact us'); ?></h4>
                        <?php the_content(); ?>

                    </div>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.1867526999536!2d30.499546315393623!3d50.45624697947617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce6703699eed%3A0xbe1a71dfba2a6562!2z0LLRg9C70LjRhtGPINCh0ZbRh9C-0LLQuNGFINCh0YLRgNGW0LvRjNGG0ZbQsiwgMjEsINCa0LjRl9Cy!5e0!3m2!1sru!2sua!4v1501264508083" class="iframe" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>