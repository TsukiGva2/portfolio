document.addEventListener("DOMContentLoaded", function () {


    // const themeSwitch = document.getElementById('theme-switch');

    // themeSwitch.addEventListener('change', function () {
    //     if (this.checked) {
    //         // Tema claro está checado (ativado)


    //         location.reload()

    //     } else {
    //         // Tema claro não está checado (desativado)
    //         location.reload()
    //     }
    // });

    // Função para abrir a imagem expandida

    // Inicialize o Swiper para o primeiro carrossel
    new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


    $('.popover-header').hide()
    $(".popover-arrow").hide()

    
})