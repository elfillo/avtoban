<?php
	$infoBlock = [
		'title' => 'МЫ ПОДКРЕПЛЯЕМ СЛОВО ДЕЛОМ!',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'img' => get_template_directory_uri().'/img/ban_2.png',
		'btn' => false,
		'reverse' => false,
	];
?>
<?php get_header()?>
<?php include 'parts/views/banner--sub-header.php'?>
    <section class="container container--shop container--side-bar">
        <div class="side-bar">
            <div class="side-bar--list">
				<?php
					require 'parts/admin/widgets/side-bar.php';
				?>
            </div>
        </div>
        <div class="content">
			<?php //woocommerce_content(); ?>
			<?php echo do_shortcode('[products]'); ?>
        </div>
    </section>
<?php include 'parts/views/organizations.php'?>
<?php include 'parts/views/benefits.php'?>
<?php do_action('info-block', $infoBlock)?>
<?php get_footer()?>