<?php
	$list = [
		['img' => 'img/benefits/1.png', 'title' => 'ЗАБОТА О ВАС  <br/> И ВАШЕМ БИЗНЕСЕ'],
		['img' => 'img/benefits/2.png', 'title' => 'ШИРОКИЙ ВЫБО <br/>УСЛУГ И ТОВАРОВ'],
		['img' => 'img/benefits/3.png', 'title' => 'ЗАЩИТА ПРАВ  <br/>ПОТРЕБИТЕЛЯ'],
		['img' => 'img/benefits/4.png', 'title' => 'ПРЕВОСХОДНЫЕ  <br/>СПЕЦИАЛИСТЫ'],
		['img' => 'img/benefits/5.png', 'title' => 'ДОПОЛНИТЕЛЬНЫЕ<br/> УСЛУГИ'],
	];
	$lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ';
?>
<section class="container">
<div class="benefits">
	<div class="title">ПРЕИМУЩЕСТВА РАБОТЫ  <br/>С ГРУППОЙ КОМПАНИЙ “АВТОБАН”</div>
	<div class="list">
		<?php foreach ($list as $item):?>
		<div class="item">
			<div class="logo"><img src="<?php get_uri($item['img'])?>" alt=""></div>
			<div class="title"><?php echo $item['title']?></div>
			<div class="desc"><?php echo $lorem?></div>
		</div>
		<?php endforeach; unset($list, $item)?>
	</div>
</div>
</section>