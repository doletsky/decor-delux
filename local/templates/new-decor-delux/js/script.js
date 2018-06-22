$(document).ready(function () {
    //маска поля ввода телефона в футере
    $('#phone').mask('+7(999) 999-99-99',
        {
            completed: function () {
                popupText='Ваша заявка принята'
            }
        });

    $('.dd-callback button').click(function (e) {
        e.preventDefault();
        if($('#phone').val().length==17){
            $.ajax({
                type: "POST",
                url: "/local/include/send_callback.php",
                data: "phone"+$('#callback').find('input#phone').val(),
                success: function(msg){
                    popupOpen();
                }
            });
        }else{
            popupText='';
        }

    });

    $('#sf button').click(function (e) {
        e.preventDefault();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var address = $('#subscribe').val();
        if(reg.test(address) == false) {
            popupText='Введите корректный e-mail';
            popupOpen();
            return false;
        }
        var form_sf=$(this).parents('form#sf');
        var param='';
        form_sf.find('input').each(function () {
            param+='&'+$(this).attr('name')+'='+$(this).val();
        });
        $.ajax({
            type: "POST",
            url: "/local/templates/new-decor-delux/components/bitrix/subscribe.form/.default/component_epilog.php",
            data: "AJAX=Y"+param,
            success: function(msg){
                popupText= msg ;
                popupOpen();
            }
        });
    });

    //сотртировка каталога
    $('select.dd-catalog__list-sort').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        var href=location.href;
        if(href.indexOf('?') > -1){
            var arHref=href.split('?');
            if(arHref[1].indexOf('c_sort')>-1){
                var params=arHref[1].split('&');
                for (var i in params){
                    if(params[i].indexOf('c_sort')>-1){
                        params[i]='c_sort='+valueSelected;
                    }
                }
                strParam=params.join('&');
            }else{
                strParam=arHref[1]+'&c_sort='+valueSelected;
            }

            href=location.pathname+'?'+strParam;
        }
        else {
            href+='?c_sort='+valueSelected;
        }
        location.href=href;
    });
    //dd-catalog__list-page-count
    $('select.dd-catalog__list-page-count').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        var href=location.href;
        var strParam='';
        if(href.indexOf('?') > -1){
            var arHref=href.split('?');
            if(arHref[1].indexOf('c_num_page')>-1){
                var params=arHref[1].split('&');
                for (var i in params){
                    if(params[i].indexOf('c_num_page')>-1){
                        params[i]='c_num_page='+valueSelected;
                    }
                }
                strParam=params.join('&');
            }else{
                strParam=arHref[1]+'&c_num_page='+valueSelected;
            }

            href=location.pathname+'?'+strParam;
        }
        else {
            href+='?c_num_page='+valueSelected;
        }
        location.href=href;
    });

    //кнопка Купить
    $('.dd-profile__info-buy-btn').click(function () {
        var id=$(this).children('span#buy-action').attr('data-id');
        if(!id || id.length<=0) return false;
        var quantity=$('#quantity').val();
        $.ajax({
            type: 'POST',
            url: '/local/templates/new-decor-delux/components/bitrix/catalog.element/decor/ajax.php',
            data: {id: id, quantity:quantity},
            success: function () {
                popupText= 'Товар успешно добавлен в карзину' ;
                popupOpen();
            }
        });
    });

    //оформление заказа - кнопка Отправить
    $('#send-order').click(function () {
        var name=$('form#form-send-order').find('input#name').val();
        var email=$('form#form-send-order').find('input#email').val();
        var phone=$('form#form-send-order').find('input#phone').val();
        $.ajax({
            type: 'POST',
            url: '/local/templates/new-decor-delux/components/bitrix/sale.basket.basket/decor/ajax.php',
            data: {name: name, email:email, phone:phone},
            success: function () {
                $('form#form-send-order').find('input').val('');
                $('#basket_form').remove();
                popupText= 'Спасибо. В ближайшее время с Вами свяжется наш менеджер.' ;
                popupOpen();
            }
        });
    });

    //краски: выбор типа и объема
    $(".o_type").on('change',function () {
        var optionSelected = $("option:selected", this);
        var classSelected = $(optionSelected).attr('class');
        $(".o_size option").css('display','none');
        $(".o_size").prop('selectedIndex', 0);
        $(".o_size").attr('disabled', true);
        $('#buy-action').attr('data-id', '');
        $('#price').html('');
        if(!classSelected) {
            return false;
        }
        var arItems=classSelected.split(" ");
        for(var i in arItems){
            if(arItems[i].length>5)
                $(".o_size option."+arItems[i]).css('display', 'block');
        }

        $(".o_size").removeAttr('disabled');
    });
    $(".o_size").on('change',function () {
        var optionSelectedS = $("option:selected", this);
        var classSelectedS = $(optionSelectedS).attr('class');
        $('#buy-action').attr('data-id', '');
        $('#price').html('');
        if(!classSelectedS) {
            return false;
        }
        var arId=classSelectedS.split("_");
        $('#buy-action').attr('data-id', arId[1]);
        $('#price').html($('#price').attr('data-price-'+classSelectedS.trim())+' Р');
    });

    $('.dd-brands-list').on('click', function(e){
        let $elem = $(e.currentTarget);
        $elem.toggleClass('__active');
    });

    //share fb
    // FB.init({
    //     appId      : '522962684704330',
    //     status     : true,
    //     xfbml      : true,
    //     version    : 'v2.7' // or v2.6, v2.5, v2.4, v2.3
    // });
    $('.dd-social__item._facebook, share_fb').click(function (e) {
        e.preventDefault();
        window.open('https://www.facebook.com/sharer.php?u='+location.href);

        // FB.ui({
        //     method: 'share',
        //     display: 'popup',
        //     href: location.href,
        // }, function(response){
        //     console.log(response);
        // });

    });
    //share vk
    $('.dd-social__item._vk, .share_vk').click(function (e) {
        e.preventDefault();
        window.open('https://vk.com/share.php?url='+location.href+'&title='+$('meta[property="og:title"]').attr('content')+'&image='+$('meta[property="og:image"]').attr('content'));
    });
    //share pin
    $('.dd-social__item._pinterest, .share_pin').click(function (e) {
        e.preventDefault();
        var p_url=location.href;
        var p_img=$('meta[property="og:image"]').attr('content');
        var p_title=$('meta[property="og:title"]').attr('content');
        window.open('https://ru.pinterest.com/pin/create/button/?url='+p_url+'&media='+p_img+'&description='+p_title);
    });

});
var popupText=''; //содержимое текстового popup

function popupOpen() {
    var t=popupText;
    if(t.length==0){
        return false;
    }
    $.magnificPopup.open({
        items: {
            src: '<div class="white-popup">'+t+'</div>', // can be a HTML string, jQuery object, or CSS selector
            type: 'inline'
        }
    });
    popupText='';
}

function trim()
{
    return this.replace(/^\s+|\s+$/g, '');
}