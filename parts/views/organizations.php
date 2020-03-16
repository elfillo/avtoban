<section class="container">
<div class="other_organizations">
	<div class="title">ДРУГИЕ ОРГАНИЗАЦИИ</div>
	<div class="list">
		<?php for($i = 0; $i < 8; $i++):?>
		<div class="item">
			<div class="logo"><img src="<?php get_uri('img/default-logo.png')?>" alt="#"></div>
			<div class="text">
				<div class="name">НАЗВАНИЕ ОРГАНЗАЦИИ</div>
				<div class="desc">
					Короткое описание деятельности
					организации, город,
					контакты и т.д.
				</div>
			</div>
		</div>
		<?php endfor;?>
	</div>
</div>
</section>