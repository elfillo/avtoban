<?php
	$clients = ['img/clients/1.png','img/clients/2.png','img/clients/3.png','img/clients/4.png']
?>
<section class="clients">
	<div class="container">
		<div class="title">Наши клиенты</div>
		<div class="list">
			<div class="swiper-container swiper-container--clients">
				<div class="swiper-wrapper">
					<?php foreach ($clients as $client):?>
					<div class="swiper-slide">
						<div class="item"><img src="<?php get_uri($client)?>" alt="#"></div>
					</div>
					<?php endforeach;?>
				</div>
				<div class="swiper-button-next clients-arrow clients-arrow--next"></div>
				<div class="swiper-button-prev clients-arrow clients-arrow--prev"></div>
			</div>
		</div>
	</div>
</section>