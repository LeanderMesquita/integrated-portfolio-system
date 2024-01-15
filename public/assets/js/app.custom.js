'use strict';
//  APPLICATION
(function ($) {

    var categories = document.querySelectorAll('[data-nav="category"]');

    for (var i = 0; i < categories.length; i++) {
        categories[i].addEventListener("click", function () {
            var current = document.querySelectorAll('[data-nav="category"]');
            for (var index = 0; index < current.length; index++) {
                current[index].className = current[index].className.replace("active", "");
            }
            this.className += " active";
        });
    }

    var items = document.querySelectorAll('[data-nav="item"]');

    for (var i = 0; i < items.length; i++) {
        items[i].addEventListener("click", function () {
            var current = document.querySelectorAll('[data-nav="item"]');
            for (var index = 0; index < current.length; index++) {
                current[index].className = current[index].className.replace("active", "");
            }
            this.className += " active";
        });

    }

})(jQuery);

$("#valida").on('click', function () {
    if (grecaptcha.getResponse() == "") {
        alert("Favor marcar caixa de validação!")
        return false;
    }
});

var subcategories = document.querySelectorAll('#categories_list [data-target]');

subcategories.forEach(subcategory => {
    subcategory.addEventListener('click', function (event) {
        event.preventDefault();
    });
});

var btn_error_reload = document.querySelector('#btn_error_reload');

btn_error_reload.addEventListener('click', function () {
    var url = new URL(window.location.href);
    var newUrl = url.origin + url.pathname;
    window.location.href = newUrl;
});