<?php
/*
Template Name: Автосервис
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
		'title' => 'МЫ ПОДКРЕПЛЯЕМ СЛОВО ДЕЛОМ!',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'img' => get_template_directory_uri().'/img/ban_2.png',
		'btn' => false,
		'reverse' => false,
	];
?>
<?php get_header()?>
<section class="page--auto-service select-banner">
	<div class="container">
		<a href="<?php echo $comLink?>" class="box">АВТОСЕРВИС КОММЕРЧЕСКОГО <br/>ТРАНСПОРТА</a>
		<a href="<?php echo $privateLink?>" class="box">АВТОСЕРВИС ЛЕГКОВОГО <br/>ТРАНСПОРТА</a>
	</div>
</section>
<?php do_action('logos', $logosData)?>
<?php do_action('info-block', $infoBlock)?>
<?php get_footer()?>