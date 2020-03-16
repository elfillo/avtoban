<?php
	add_action('product_configuration', 'drawProductConfiguration');
	add_action('product_sale_banner', 'drawProductSaleBanner');

	function drawProductConfiguration($id){
        $configuration_features = carbon_get_post_meta($id, 'configuration_features');
		?>
		<section class="product_configuration">
			<div class="list">
				<?php foreach ($configuration_features as $item):?>
					<div class="item">
						<div class="img"><img src="<?php echo $item['configuration_features--img']?>" alt="#"></div>
						<div class="title"><?php echo $item['configuration_features--title']?></div>
						<div class="desc"><?php echo $item['configuration_features--desc']?></div>
					</div>
				<?php endforeach;?>
			</div>
		</section>
		<?
	}

	function drawProductSaleBanner(){
	    ?>
            <section class="product_sale_banner">
                <img src="<?php get_uri('img/product_sale_banner.png')?>" alt="#">
            </section>
        <?
    }
?>