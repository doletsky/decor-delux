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