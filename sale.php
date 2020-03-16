<?php
	/*
	Template Name: Акции
	*/
?>
<?php get_header()?>
	<section>
		<div class="sale-block">
			<div class="wrapper">
				<div class="swiper-container swiper-container--sale">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="sale-item">
								<div class="img"><img src="<?php get_uri('img/sale_1.png')?>" alt="#"></div>
								<div class="text">
									<div class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elitdatat Lorem ipsum dolor sit amet, consectetur adipiscing elitdatat</div>
									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">Slide 2</div>
					</div>
					<div class="swiper-button-next sale-arrow sale-arrow--next"></div>
					<div class="swiper-button-prev sale-arrow sale-arrow--prev"></div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer()?>