<?php
	$lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ';
	$list = [
		['title' => 'Диагностика автомобиля', 'text' => $lorem],
		['title' => 'Авторемонт', 'text' => $lorem],
		['title' => 'Продажа автомобилей', 'text' => $lorem],
		['title' => 'Транспортировка', 'text' => $lorem],
	]
?>
<section class="services-list">
	<div class="container">
		<div class="list">
			<?php foreach ($list as $item):?>
			<div class="item">
				<div class="title"><?php echo $item['title']?></div>
				<div class="desc"><?php echo $item['text']?></div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</section>