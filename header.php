<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="#" />
</head>
<body>
<div class="container">
    <header class="header">
        <div class="sub-header">
            <div class="city">Иркутск</div>
            <a href="tel:+78008000000" class="phone">+7 800 800 00 00</a>
            <div class="links">
                <a href="#" class="item whatsapp"><img src="<?php get_uri('img/icons/whatsapp.png')?>" alt="#"></a>
                <a href="#" class="item viber"><img src="<?php get_uri('img/icons/viber.png')?>" alt="#"></a>
            </div>
        </div>
        <a href="/" class="logo"><img src="<?php get_uri('img/logo.png')?>" alt="Логотип"></a>
	    <?php wp_nav_menu([
		    'theme_location' => 'header',
		    'container' => 'nav',
		    'container_class' => 'nav-menu',
	    ])?>
        <div class="burger"><span></span><span></span><span></span></div>
        <div class="mobile">
	        <?php wp_nav_menu([
		        'theme_location' => 'header',
		        'container' => 'nav',
		        'container_class' => 'mobile-menu',
	        ])?>
            <div class="sub-header">
                <div class="city">Иркутск</div>
                <a href="tel:+78008000000" class="phone">+7 800 800 00 00</a>
                <div class="links">
                    <a href="#" class="item whatsapp"><img src="<?php get_uri('img/icons/whatsapp.png')?>" alt="#"></a>
                    <a href="#" class="item viber"><img src="<?php get_uri('img/icons/viber.png')?>" alt="#"></a>
                </div>
            </div>
        </div>
    </header>
</div>


