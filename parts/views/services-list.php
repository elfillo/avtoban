<?php
	$services = carbon_get_theme_option('services');
?>
<section class="services-list">
	<div class="container">
		<div class="list">
			<?php foreach ($services as $service):?>
			<div class="item">
				<div class="title"><?php echo $service['services--title']?></div>
				<div class="desc"><?php echo $service['services--desc']?></div>
			</div>
			<?php endforeach; unset($services, $service)?>
		</div>
	</div>
</section>