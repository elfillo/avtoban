<?php
	/*
	Template Name: Акции
	*/
?>
<?php $sales = carbon_get_post_meta($post->ID, 'sales');?>
<?php get_header()?>
	<section>
		<div class="sale-block">
			<div class="wrapper">
				<div class="swiper-container swiper-container--sale">
					<div class="swiper-wrapper">
                        <?php foreach ($sales as $sale):?>
						<div class="swiper-slide">
							<div class="sale-item">
								<div class="img"><img src="<?php echo $sale['sale--img']?>" alt="#"></div>
								<div class="text">
									<div class="title"><?php echo $sale['sale--title']?></div>
									<div class="desc"><?php echo $sale['sale--desc']?></div>
								</div>
							</div>
						</div>
                        <?php endforeach; unset($sales, $sale)?>
					</div>
					<div class="swiper-button-next sale-arrow sale-arrow--next"></div>
					<div class="swiper-button-prev sale-arrow sale-arrow--prev"></div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer()?>