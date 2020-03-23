<?php
/*
Template Name: Контакты
*/
?>
<?php $contacts = carbon_get_post_meta($post->ID, 'contacts'); ?>
<?php get_header()?>
<section class="container">
    <div class="contacts">
        <div class="list">
            <?php foreach ($contacts as $item):?>
            <div class="item">
                <div class="title"><?php echo $item['contact--title']?></div>
                <div class="content"><?php echo $item['contact--desc']?></div>
            </div>
            <?php endforeach; unset($item)?>
        </div>
    </div>
</section>
<?php get_footer()?>