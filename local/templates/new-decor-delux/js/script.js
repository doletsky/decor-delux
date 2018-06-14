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
            popupOpen();
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
        var param='';
        $('form#sf input').each(function () {
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