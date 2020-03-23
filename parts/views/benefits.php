<?php
    $list = carbon_get_theme_option('benefits');
?>
<section class="container">
<div class="benefits">
	<div class="title">ПРЕИМУЩЕСТВА РАБОТЫ  <br/>С ГРУППОЙ КОМПАНИЙ “АВТОБАН”</div>
	<div class="list">
		<?php foreach ($list as $item):?>
		<div class="item">
			<div class="logo"><img src="<?php echo $item['benefits--img']?>" alt=""></div>
			<div class="title"><?php echo $item['benefits--title']?></div>
			<div class="desc"><?php echo $item['benefits--desc']?></div>
		</div>
		<?php endforeach; unset($list, $item)?>
	</div>
</div>
</section>