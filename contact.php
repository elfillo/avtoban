<?php
/*
Template Name: Контакты
*/
?>
<?php
    $cont_demo = 'Адрес: ул. Пушкина, д. 1, оф. 200 телефон: +7(3952) 80-80-80 Индекс: 664041';
    $contacts = [
            ['title' => 'Центральный офис ”Автобан”', 'content' => $cont_demo],
            ['title' => 'Отдел продаж легковых автомобилей', 'content' => $cont_demo],
            ['title' => 'Отдел продаж грузовых автомобилей', 'content' => $cont_demo],
            ['title' => 'Центральный офис ”Автобан”', 'content' => $cont_demo],
            ['title' => 'Отдел продаж легковых автомобилей', 'content' => $cont_demo],
            ['title' => 'Отдел продаж грузовых автомобилей', 'content' => $cont_demo],
    ]
?>
<?php get_header()?>
<section class="container">
    <div class="contacts">
        <div class="list">
            <?php foreach ($contacts as $item):?>
            <div class="item">
                <div class="title"><?php echo $item['title']?></div>
                <div class="content"><?php echo $item['content']?></div>
            </div>
            <?php endforeach; unset($item)?>
        </div>
    </div>
</section>
<?php get_footer()?>