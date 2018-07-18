<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="category-single-product woman-costume-stripe" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		<a href="<?php the_permalink(); ?>">
			<span class="single-product-hover">
				<span class="category-single-product-name"><?php the_title(); ?></span>
				<hr>
				<span class="category-single-product-price"><?php echo get_post_meta( $post->ID, 'coust', true ); ?></span>
			</span>
		</a>
	</div>

<?php endwhile; ?>

<?php endif; ?>