<?php
	/*
	Template Name: Автосалон
	*/
?>
<?php get_header()?>
    <section class="container">
        <div class="title">Категория товаров</div>
        <?php echo do_shortcode('[product_categories number="0" parent="0"]')?>
    </section>
    <?php include 'parts/views/benefits.php'?>
<?php get_footer()?>