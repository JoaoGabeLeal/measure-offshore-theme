
//Rolar para o elemento com o ID especificado na URL
$(document).ready(function() {
    if (window.location.hash) {
        var id = window.location.hash.slice(1);

        if ($('#' + id).length) {
            // Altura da barra de navegação
            var navbarHeight = $('.navbar').outerHeight();

            // Defina a margem superior como 50px
            var marginTop = 90;

            // Calcule a posição do elemento, subtraia a altura da barra de navegação e a margem superior
            var pos = $('#' + id).offset().top - navbarHeight - marginTop;

            $('html, body').animate({
                scrollTop: pos
            }, 1000, function() { // 1000ms = 1s
                // Faça o elemento "piscar" alterando sua opacidade
                var element = $('#' + id);
                element.animate({
                    opacity: 0.5
                }, 300, function() {
                    element.animate({
                        opacity: 1
                    }, 300);
                });
            });
        }
    }
});