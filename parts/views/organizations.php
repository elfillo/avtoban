<?php $organizations = carbon_get_theme_option('other_organizations');?>
<section class="container">
<div class="other_organizations">
	<div class="title">ДРУГИЕ ОРГАНИЗАЦИИ</div>
	<div class="list">
        <?php foreach ($organizations as $organization):?>
		<a href="<?php echo $organization['organization--link']?>" class="item">
			<div class="logo"><img src="<?php echo $organization['organization--img']?>" alt="#"></div>
			<div class="text">
				<div class="name"><?php echo $organization['organization--title']?></div>
				<div class="desc"><?php echo $organization['organization--desc']?></div>
			</div>
		</a>
		<?php endforeach; unset($organizations, $organization)?>
	</div>
</div>
</section>