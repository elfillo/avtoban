"use strict";

//active link
$(function () {
    $(".nav-menu .menu li a").each(function () {
        window.location.href == this.href && $(this.parentElement).addClass("active");
    });

});

//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    $('.burger').click(function(){
        showMenu = !showMenu;
        //$('.mobile_menu').toggleClass('hide_list');
        if(showMenu){
            $('.mobile').css({
                'display':'flex'
            });
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
        }else{
            $('.mobile').css({
                'display':'none'
            });
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'

            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            });
        }
    });
});

//open modal

$(document).ready(function () {
   $('.open-modal_callback').click(function () {
       $('.modal_callback').css('display', 'flex');
   });
    $('.open-modal_profile').click(function () {
        $('.modal_profile').css('display', 'flex');
    });
    //
});

//close modal
$(document).ready(function () {
    $('.form .close').click(function () {
       $('.modal').css('display', 'none');
    });
});

//not add to cart

$(document).ready(function () {
    $('form.cart button').click(function () {
       event.preventDefault();
       let product_name = document.querySelector('h1.product_title').textContent;
       $('.modal_shop').css('display', 'flex');
       $('#product_name').val(product_name);
    });
});

//add catalog for menu (mobile)
$(document).ready(function () {
    let mobile_menu = $('.mobile_menu');

    let catalog_link = `
        <li class="open-modal_catalog"><a href="#">Каталог</a></li>
    `;
    $(mobile_menu).prepend(catalog_link);

    $('.open-modal_catalog').click(function () {
        console.log('hui');
        $('.modal_catalog').css('display', 'flex');
    });
});

//toggle filters (for mobile)
$(document).ready(function () {
    let filters = $('.filters .widget-area');

    let open_filters = true;

    $('.filters .filter_toggle').click(function () {
        open_filters = !open_filters;
        $(filters).toggleClass('toggle_filters');
        if(open_filters){
            $('.filters .filter_toggle span').text('Скрыть фильтры');
            $('.filters .filter_toggle .arrow').css('transform', 'rotate(-45deg)');

        }else{
            $('.filters .filter_toggle span').text('Показать фильтры');
            $('.filters .filter_toggle .arrow').css('transform', 'rotate(45deg)');
        }

    });

});