<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css?<?php echo mt_rand(100000,999999); ?>" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css?<?php echo mt_rand(100000,999999); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-about.css">


	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/submit_form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-bespoke.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-category.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/product.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/submit_form.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/study.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contacts.css">

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>

		<div class="mobile_menu"></div>
		<header>

			<div class="top_header">
				<div class="container">

					<div class="header_center">

					<div class="lang_money">
                        <ul class="lang_money-lang_list" data-lang="<?php $currentLang = qtrans_getLanguage(); ?> <?php echo "$currentLang"; ?>" >
                            <li data-lang="ru">
                                <a href="/?lang=ru">Rus</a>
                             </li>
                             <li data-lang="en"> 
                                <a href="/?lang=en">Eng</a>
                                
                            </li>
                        </ul>
                        <ul class="lang_money-money_list">
                            <li>
                                <span class="current">₴ ГРН</span>
                                <ul class="dropdown">
                                    <li>€ EUR</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

						<div class="social">
							<a href="https://www.facebook.com/FuekiRyuko/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-letter-logo%20(1).svg" alt="facebook"></a>
							<a href="https://www.instagram.com/fueki_ryuko/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-social-network-logo-of-photo-camera%20(1).svg" alt="instagram"></a>
							<div class="phone">
								<a href="tel:+380505306350"><div class="num_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-receiver.svg" alt="call"></div><div class="num">38 (093) 621-95-19</div></a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="title">
				<a href="<?php echo home_url(); ?>">FUEKI RYUKO</a>
			</div>
			<div class="main_menu">
				<div class="container">
				<?php html5blank_nav(); ?>
				</div>
			</div>
		</header>