$(document).ready(function () {
    //маска поля ввода телефона в футере
    $('#phone').mask('+7(999) 999-99-99',
        {
            completed: function () {
                popupText='Ваша заявка принята'
            }
        });

    $('button').click(function (e) {
        e.preventDefault();
        popupOpen();
    });

    }
);
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