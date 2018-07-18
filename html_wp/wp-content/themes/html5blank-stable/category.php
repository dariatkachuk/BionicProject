<?php get_header(); ?>

<main>
		<!-- Wrap begin -->
		<div class="container">

		<div class="flex-container">
			<!--Sidebar begin -->


			<nav class="category-sidebar">

				<?php html5blank_nav_category(); ?>
				
			</nav>
			
			
			<!--Products begin -->
			<div class="category-all-products">
					
					<div class="category-add-nav">
						<div class="breadscrumbs">
							<div class="nav-wrapper">
						      <div>
						      	<?php echo get_category_parents($cat, TRUE, ''); ?>
						      
						      </div>
							</div>
						</div>

					</div>

				<div class="all-products-container">

					<?php get_template_part('loop'); ?>
						
				</div>
				
				<div class="category-pagination">
					<?php get_template_part('pagination'); ?>
				</div>
				<!--Pagination begin -->
			<!--	<div class="category-pagination">
					<div class="pagination">
						  <a href="#">&lt;</a>
						  <a href="#" class="active">1</a>
						  <a href="#">2</a>
						  <a href="#">3</a>
						  <a href="#">&gt;</a>
					</div>
				</div> -->
				<!--Pagination end -->

			</div>
			<!--Products end -->
		</div>
		</div>
		<!-- Wrap end -->
	</main>

<?php get_footer(); ?>