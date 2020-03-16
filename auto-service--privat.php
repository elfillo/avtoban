<?php
	/*
	Template Name: Автосервис легковой
	*/
?>
<?php
	$logosData = [
		'title' => 'АВТОМОБИЛИ, КОТОРЫЕ МЫ РЕМОНТИРУЕМ:',
		'logos' => [
			['img' => 'img/auto-logos/1.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/2.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/3.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/4.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/5.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/6.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/7.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/8.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/9.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/10.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/11.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/12.png', 'name' => 'any name'],
		]
	];
	$comLink = get_page_data('auto-service--com')->guid;
	$privateLink = get_page_data('auto-service--privat')->guid;
	$infoBlock = [
		'title' => 'Услуги по ремонту легкового автотранспорта',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'img' => get_template_directory_uri().'/img/privat_ban.png',
		'btn' => true,
		'reverse' => true,
	];
	$infoBlock_2 = [
		'title' => 'Спец-предложение для юридических лиц',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'img' => get_template_directory_uri().'/img/info_ban_2.png',
		'btn' => true,
		'reverse' => false,
	];
	$infoBlock_3 = [
		'title' => 'Спец-предложение для юридических лиц',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'img' => get_template_directory_uri().'/img/info_ban_3.png',
		'btn' => true,
		'reverse' => true,
	];
	$logosData = [
		'title' => '“автобан” - официальный дилер',
		'logos' => [
			['img' => 'img/auto-logos/1.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/2.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/3.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/4.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/5.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/6.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/7.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/8.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/9.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/10.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/11.png', 'name' => 'any name'],
			['img' => 'img/auto-logos/12.png', 'name' => 'any name'],
		]
	];
?>
<?php get_header()?>
<?php do_action('service-breadcrumbs', 'коммерческий траспорт')?>
<?php do_action('info-block', $infoBlock)?>
<?php include 'parts/views/services-list.php'?>
<?php do_action('info-block', $infoBlock_2)?>
<?php include 'parts/views/benefits.php'?>
<?php do_action('info-block', $infoBlock_3)?>
<?php do_action('logos', $logosData)?>
<?php get_footer()?>