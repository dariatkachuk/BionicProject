		<footer>
			<div class="container">
			<form method="post" action="#">
				<label for="email"><?php echo __('[:en]Stay tuned, enter your email below[:ru]Оставайтесь с нами, укажите свой email ниже'); ?></label><br>
				<input type="email" id="email" name="email" placeholder="<?php echo __('[:en]Your email[:ru]Ваш email'); ?>">
			</form>
				<input class="mail" type="button" value="<?php echo __('[:en]Send[:ru]Отправить'); ?>">
				
			</div>


			<div class="copyright">
				&copy; 2017, FUEKI RYUKO. All Rights Reserved.
			</div>
		</footer>

	<!--Скрипты-->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
  		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-1.4.1.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main-slider.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bespoke-slider.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>	

		<?php wp_footer(); ?>

	</body>
</html>