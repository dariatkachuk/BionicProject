<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<section class="section">
    <div class="container">

                 <div class="category-add-nav">
                        <div class="breadscrumbs">
                            <div class="nav-wrapper">
                              <div>
                               <?php the_category('', 'multiple' ); ?>
                              
                               
                              </div>
                            </div>
                        </div>

                    </div>


        <div class="product_conteiner">
            <div class="product_photo">
                <div class="single_foto_wrap">
                  <div id="main" class="photo" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                </div>
                <div class="gallery">
                <?php if( get_field('foto_1') ): ?>
                  <div class="gallery_item" style="background-image: url(<?php the_field('foto_1'); ?>)"></div>
                <?php endif; ?>
                <?php if( get_field('foto_2') ): ?>
                  <div class="gallery_item" style="background-image: url(<?php the_field('foto_2'); ?>)"></div>
                <?php endif; ?>
                <?php if( get_field('foto_3') ): ?>
                  <div class="gallery_item" style="background-image: url(<?php the_field('foto_3'); ?>)"></div>
                <?php endif; ?>
                <?php if( get_field('foto_4') ): ?>
                  <div class="gallery_item" style="background-image: url(<?php the_field('foto_4'); ?>)"></div>
                <?php endif; ?>
                </div>

            </div>
            <div class="product_data">
                <h1 class="product_name"><?php the_title(); ?></h1>
                <div class="product_content">
                    <div class="product_cost"><?php echo get_post_meta( $post->ID, 'coust', true ); ?></div> 
                    <div class="content_typography">
                        <div class="product_description">
                        <p class="description_name"><?php echo __('[:en]Description:[:ru]Описание:'); ?></p>
                            <?php the_content(); // Dynamic Content ?>
                        </div>    
                        <div class="product_description">
                        <p class="description_name"><?php echo __('[:en]Color:[:ru]Цвет:'); ?></p>

                        <?php if( get_field('model_color1') ): ?>
                          <div class="model_color" style="background-color: <?php echo the_field('model_color1') ?>"></div>
                        <?php endif; ?>
                        <?php if( get_field('model_color2') ): ?>
                          <div class="model_color" style="background-color: <?php echo the_field('model_color2') ?>"></div>
                        <?php endif; ?>
                        <?php if( get_field('model_color3') ): ?>
                          <div class="model_color" style="background-color: <?php echo the_field('model_color3') ?>"></div>
                        <?php endif; ?>
                        </div>
                        <div class="product_description">
                        <p class="description_name"><?php echo __('[:en]Material:[:ru]Материал:'); ?></p>
                            <?php echo get_post_meta( $post->ID, 'material', true ); ?>
                        </div>
                    
                        <div class="size_list"> 
                            <h4><?php echo __('[:en]IN STOCK:[:ru]В НАЛИЧИИ:[:]'); ?></h4>  
                            
                            <?php

                            // vars 
                            $sizes = get_field('size');

                            // check
                            if( $sizes ): ?>
                            <ul>
                              <?php foreach( $sizes as $size ): ?>
                                <button class = "circleBase type1" ><?php echo $size; ?></button>
                              <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>

                        </div>
                        <div class="btn_table table_btn"><?php echo __('[:en]Size table[:ru]Таблица размеров'); ?></div>
                    </div>
                </div>
                    <div class="btn"><?php echo __('[:en]Order[:ru]Заказать'); ?></div>
            </div>

        </div>   
         

    </div>
</section>

           <!--POPPAP BEGGIN  -->          
    <div class="background_form" style="display: none";>
        <div class="form">
            <h1 class="form_title"><?php echo __('[:en]Your order form[:ru]Форма Вашего заказа'); ?></h1>

            <?php echo do_shortcode("[contact-form-7 id='288' title='Контактная форма 1']"); ?>
        </div>
    </div>  
    <!-- POPPUP END -->


<!--  TABLE POPPUP-->
    <div class="background_form_table" style="display: none";>
        <div class="form_table kids">
            
            <div class="page_size">

                    <img class="sizes" src="">
                     
                
        </div>
        <div class="close_table"></div>
    </div>  
</div>
    <!--  TABLE POPPUP-->


	<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>