<?php
	add_action('logos', 'drawLogosList');
	add_action('info-block', 'drawInfoBlock');
	add_action('service-breadcrumbs', 'drawBreadcrumbs');

	function drawLogosList($data){
		$title = isset($data['title']) ? $data['title'] : '';
		$logos = isset($data['logos']) ? $data['logos'] : [];
		?>
		<section class="logos">
			<div class="container">
				<div class="title"><?php echo $title?></div>
				<div class="list">
					<?php foreach ($logos as $logo):?>
					<?php
						$img = isset($logo['img']) ? $logo['img'] : '';
					?>
					<div class="item">
						<div class="img"><img src="<?php get_uri($img)?>" alt="#"></div>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</section>
		<?
	}

	function drawInfoBlock($data){
	    $title      = $data['title'];
	    $text       = $data['text'];
	    $img        = $data['img'];
	    $btn        = $data['btn'];
	    $reverse    = $data['reverse'];
		?>
        <section>
            <div class="info-block <?php echo $reverse ? 'reverse' : ''?>">
                <div class="img"><img src="<?php echo $img?>" alt="#"></div>
                <div class="text">
                    <div class="title"><?php echo $title?></div>
                    <div class="desc"><?php echo $text?></div>
					<?php if($btn):?>
                        <div class="btn"><div class="button">Связаться</div></div>
					<?php endif;?>
                </div>
            </div>
        </section>
		<?
    }

    function drawBreadcrumbs($name){
	    $link = get_page_data('auto-service')->guid;
        ?>
            <section class="service-breadcrumbs">
                <a href="<?php echo $link?>">Автосервис</a> /
                <span><?php echo $name?></span>
            </section>
        <?
    }
?>