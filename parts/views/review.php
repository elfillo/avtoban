<?php $list = carbon_get_theme_option('review');?>
<section>
	<div class="review-block">
		<div class="wrapper">
			<div class="swiper-container swiper-container--review">
				<div class="swiper-wrapper">
                    <?php foreach ($list as $item):?>
					<div class="swiper-slide">
						<div class="review-item">
							<div class="title"><?php echo $item['review--title']?></div>
							<div class="text"><?php echo $item['review--text']?></div>
							<div class="name"><?php echo $item['review--name']?></div>
							<div class="position"><?php echo $item['review--position']?></div>
						</div>
					</div>
                    <?php endforeach; unset($list, $item)?>
				</div>
				<div class="swiper-button-next review-arrow review-arrow--next"></div>
				<div class="swiper-button-prev review-arrow review-arrow--prev"></div>
			</div>
		</div>
	</div>
</section>