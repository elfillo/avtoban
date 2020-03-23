<?php
	$clients = carbon_get_theme_option('partner-list');
	foreach ($clients as &$client){
			$client = wp_get_attachment_url($client);
    }
?>
<section class="clients">
	<div class="container">
		<div class="title">Наши клиенты</div>
		<div class="list">
			<div class="swiper-container swiper-container--clients">
				<div class="swiper-wrapper">
					<?php foreach ($clients as $client):?>
					<div class="swiper-slide">
						<div class="item"><img src="<?php echo $client?>" alt="#"></div>
					</div>
					<?php endforeach; unset($clients, $client)?>
				</div>
				<div class="swiper-button-next clients-arrow clients-arrow--next"></div>
				<div class="swiper-button-prev clients-arrow clients-arrow--prev"></div>
			</div>
		</div>
	</div>
</section>